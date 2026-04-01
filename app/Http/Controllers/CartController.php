<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // 🔥 Apply coupon and return discounted total
    private function applyCouponDiscount($total)
    {
        $coupon = session()->get('coupon');

        if (!$coupon) return $total;

        $couponData = Coupon::where('code', $coupon['code'])->first();
        if (!$couponData) return $total;

        $discount = 0;
        if ($couponData->type == 'flat') {
            $discount = $couponData->value;
        } else {
            $discount = ($total * $couponData->value) / 100;
            if ($couponData->max_discount && $discount > $couponData->max_discount) {
                $discount = $couponData->max_discount;
            }
        }

        // 🔥 Update session with latest discount
        session()->put('coupon', [
            'code' => $couponData->code,
            'discount' => $discount
        ]);

        return max($total - $discount, 0);
    }

    // 🔥 Calculate cart total
    private function calculateTotal($carts, $isAuth = true)
    {
        $total = 0;

        foreach ($carts as $item) {
            if ($isAuth) {
                $price = $item->product->discount_price > 0
                    ? $item->product->price - $item->product->discount_price
                    : $item->product->price;
                $qty = $item->quantity;
            } else {
                $price = $item['discount'] > 0
                    ? $item['price'] - $item['discount']
                    : $item['price'];
                $qty = $item['quantity'];
            }
            $total += $price * $qty;
        }

        return $total;
    }

    // Add to cart
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        if (auth()->check()) {
            $cart = Cart::where('user_id', auth()->id())
                ->where('product_id', $id)
                ->first();

            if ($cart) {
                $cart->quantity += 1;
                $cart->save();
            } else {
                Cart::create([
                    'user_id' => auth()->id(),
                    'product_id' => $id,
                    'quantity' => 1
                ]);
            }
        } else {
            $cart = session()->get('cart', []);
            if (isset($cart[$id])) {
                $cart[$id]['quantity'] += 1;
            } else {
                $cart[$id] = [
                    "product_id" => $product->id,
                    "name" => $product->name,
                    "price" => $product->price,
                    "discount" => $product->discount_price,
                    "quantity" => 1,
                    "image" => $product->image
                ];
            }
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.list')->with('success', 'Added to cart');
    }

    // Cart list
    public function cartList()
    {
        if (auth()->check()) {
            $carts = Cart::with('product')
                ->where('user_id', auth()->id())
                ->get();
            $total = $this->calculateTotal($carts, true);
        } else {
            $carts = session()->get('cart', []);
            $total = $this->calculateTotal($carts, false);
        }

        $total = $this->applyCouponDiscount($total);
        $coupon = session()->get('coupon');

        return view('frontend.cart', compact('carts', 'total', 'coupon'));
    }

    // Update cart (ajax)
    public function updateCart(Request $request)
    {
        if (auth()->check()) {
            $cart = Cart::findOrFail($request->id);
            if ($request->type == 'increment') $cart->quantity += 1;
            else if ($cart->quantity > 1) $cart->quantity -= 1;
            $cart->save();

            $carts = Cart::with('product')->where('user_id', auth()->id())->get();
            $grandTotal = $this->calculateTotal($carts, true);
        } else {
            $cartSession = session()->get('cart', []);
            $id = $request->id;
            if (!isset($cartSession[$id])) return response()->json(['error' => 'Item not found']);

            if ($request->type == 'increment') $cartSession[$id]['quantity'] += 1;
            else if ($cartSession[$id]['quantity'] > 1) $cartSession[$id]['quantity'] -= 1;

            session()->put('cart', $cartSession);
            $grandTotal = $this->calculateTotal($cartSession, false);
            $cart = (object)['quantity' => $cartSession[$id]['quantity']];
        }

        $grandTotal = $this->applyCouponDiscount($grandTotal);

        // Price for row
        $rowPrice = auth()->check()
            ? ($cart->product->discount_price > 0
                ? $cart->product->price - $cart->product->discount_price
                : $cart->product->price)
            : ($cartSession[$id]['discount'] > 0
                ? $cartSession[$id]['price'] - $cartSession[$id]['discount']
                : $cartSession[$id]['price']);

        return response()->json([
            'quantity' => $cart->quantity,
            'total' => $cart->quantity * $rowPrice,
            'grand_total' => $grandTotal,
            'discount' => session('coupon.discount', 0),
        ]);
    }

    // Remove cart item
    public function removeCart(Request $request)
    {
        if (auth()->check()) {
            $cart = Cart::findOrFail($request->id);
            $cart->delete();

            $carts = Cart::with('product')->where('user_id', auth()->id())->get();
            $grandTotal = $this->calculateTotal($carts, true);
        } else {
            $cartSession = session()->get('cart', []);
            $id = $request->id;
            if (!isset($cartSession[$id])) return response()->json(['error' => 'Item not found']);

            unset($cartSession[$id]);
            session()->put('cart', $cartSession);
            $grandTotal = $this->calculateTotal($cartSession, false);
        }

        $grandTotal = $this->applyCouponDiscount($grandTotal);

        return response()->json([
            'success' => true,
            'id' => $request->id,
            'grand_total' => $grandTotal
        ]);
    }

    // Apply coupon
    public function applyCoupon(Request $request)
    {
        $coupon = Coupon::where('code', $request->code)->first();
        if (!$coupon) return response()->json(['error' => 'Invalid coupon']);
        if ($coupon->expiry_date && now()->gt($coupon->expiry_date)) {
            return response()->json(['error' => 'Coupon expired']);
        }

        $carts = auth()->check()
            ? Cart::with('product')->where('user_id', auth()->id())->get()
            : session()->get('cart', []);

        $total = $this->calculateTotal($carts, auth()->check());
        $discount = 0;

        if ($coupon->type == 'flat') {
            $discount = $coupon->value;
        } else {
            $discount = ($total * $coupon->value) / 100;
            if ($coupon->max_discount && $discount > $coupon->max_discount) $discount = $coupon->max_discount;
        }

        $finalTotal = max($total - $discount, 0);

        session()->put('coupon', [
            'code' => $coupon->code,
            'discount' => $discount
        ]);

        return response()->json([
            'success' => 'Coupon applied successfully',
            'discount' => $discount,
            'final_total' => $finalTotal
        ]);
    }
}
