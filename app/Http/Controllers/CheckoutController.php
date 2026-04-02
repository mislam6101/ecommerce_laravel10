<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;

class CheckoutController extends Controller
{
    // public function index()
    // {
    //     if(auth()->check()){
    //         $carts = Cart::with('product')->where('user_id', auth()->id())->get();
    //     } else {
    //         $carts = session()->get('cart', []);
    //     }

    //     // Total calculation
    //     $total = $this->calculateTotal($carts);
    //     $coupon = session()->get('coupon');
    //     $grandTotal = $coupon ? max($total - $coupon['discount'], 0) : $total;

    //     return view('frontend.checkout', compact('carts', 'total', 'coupon', 'grandTotal'));
    // }

    public function index()
    {
        if (auth()->check()) {
            $carts = Cart::with('product')
                ->where('user_id', auth()->id())
                ->get();
        } else {
            $carts = session()->get('cart', []);
        }

        $total = 0;

        foreach ($carts as $item) {
            if (isset($item->product)) {
                $price = $item->product->discount_price > 0
                    ? $item->product->price - $item->product->discount_price
                    : $item->product->price;

                $total += $price * $item->quantity;
            } else {
                $price = $item['discount'] > 0
                    ? $item['price'] - $item['discount']
                    : $item['price'];

                $total += $price * $item['quantity'];
            }
        }

        // 🔥 coupon
        $coupon = session()->get('coupon');
        $discount = $coupon['discount'] ?? 0;

        $grandTotal = max($total - $discount, 0);

        return view('frontend.checkout', compact('carts', 'total', 'discount', 'grandTotal'));
    }

    private function calculateTotal($carts)
    {
        $total = 0;
        foreach ($carts as $item) {
            if (isset($item->product)) { // logged-in
                $price = $item->product->discount_price > 0 ? $item->product->price - $item->product->discount_price : $item->product->price;
                $total += $price * $item->quantity;
            } else { // guest
                $price = $item['discount'] > 0 ? $item['price'] - $item['discount'] : $item['price'];
                $total += $price * $item['quantity'];
            }
        }
        return $total;
    }

    public function placeOrder(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
        ]);

        $order = Order::create([
            'user_id' => auth()->id() ?? null,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'total' => session()->get('coupon') ? session('grand_total') : $this->calculateTotal(session('cart')),
            'coupon_code' => session()->get('coupon')['code'] ?? null,
            'discount' => session()->get('coupon')['discount'] ?? 0,
            'status' => 'pending'
        ]);

        // Order items
        $carts = auth()->check() ? Cart::with('product')->where('user_id', auth()->id())->get() : session('cart', []);
        foreach ($carts as $item) {
            $order->items()->create([
                'product_id' => isset($item->product) ? $item->product->id : $item['product_id'],
                'quantity' => $item->quantity ?? $item['quantity'],
                'price' => isset($item->product) ? $item->product->price : $item['price']
            ]);
        }

        // Clear cart & coupon
        if (auth()->check()) {
            Cart::where('user_id', auth()->id())->delete();
        } else {
            session()->forget('cart');
        }
        session()->forget('coupon');

        return redirect()->route('checkout.index')->with('success', 'Order placed successfully!');
    }
}
