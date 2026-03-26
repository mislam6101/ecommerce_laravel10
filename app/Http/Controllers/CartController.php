<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //Cart Store:
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        // 🔐 Logged user
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
                    "product_id" => $product->id, // 🔥 add this
                    "name" => $product->name,
                    "price" => $product->price,
                    "discount" => $product->discount_price,
                    "quantity" => 1,
                    "image" => $product->image
                ];
            }

            session()->put('cart', $cart); // ⚠️ এটা miss করলে save হবে না
        }

        return redirect()->route('cart.list')->with('success', 'Added to cart');
    }

    //Cart List:
    public function cartList()
    {
        $total = 0;

        if (auth()->check()) {

            $carts = Cart::with('product')
                ->where('user_id', auth()->id())
                ->get();

            foreach ($carts as $cart) {
                $price = $cart->product->discount_price > 0
                    ? $cart->product->price - $cart->product->discount_price
                    : $cart->product->price;

                $total += $price * $cart->quantity;
            }
        } else {

            $carts = session()->get('cart', []);

            foreach ($carts as $item) {
                $price = $item['discount'] > 0
                    ? $item['price'] - $item['discount']
                    : $item['price'];

                $total += $price * $item['quantity'];
            }
        }

        return view('frontend.cart', compact('carts', 'total'));
    }
    //Cart update using ajax:
    public function updateCart(Request $request)
    {
        // 🔐 Logged in user
        if (auth()->check()) {

            $cart = Cart::findOrFail($request->id);

            if ($request->type == 'increment') {
                $cart->quantity += 1;
            } else {
                if ($cart->quantity > 1) {
                    $cart->quantity -= 1;
                }
            }

            $cart->save();

            if ($cart->product->discount_price > 0) {
                $dis = $cart->product->price - $cart->product->discount_price;
            } else {
                $dis = $cart->product->price;
            }

            $grandTotal = 0;

            $carts = Cart::with('product')
                ->where('user_id', auth()->id())
                ->get();

            foreach ($carts as $item) {
                $price = $item->product->discount_price > 0
                    ? $item->product->price - $item->product->discount_price
                    : $item->product->price;

                $grandTotal += $price * $item->quantity;
            }

            return response()->json([
                'quantity' => $cart->quantity,
                'total' => $cart->quantity * $dis,
                'grand_total' => $grandTotal // 🔥 add this
            ]);
        }

        // 👤 Guest user
        $cart = session()->get('cart', []);
        $id = $request->id;

        if (isset($cart[$id])) {

            if ($request->type == 'increment') {
                $cart[$id]['quantity'] += 1;
            } else {
                if ($cart[$id]['quantity'] > 1) {
                    $cart[$id]['quantity'] -= 1;
                }
            }

            session()->put('cart', $cart);

            if ($cart[$id]['discount'] > 0) {
                $disg = $cart[$id]['price'] - $cart[$id]['discount'];
            } else {
                $disg = $cart[$id]['price'];
            }

            $grandTotal = 0;

            foreach ($cart as $item) {
                $price = $item['discount'] > 0
                    ? $item['price'] - $item['discount']
                    : $item['price'];

                $grandTotal += $price * $item['quantity'];
            }

            return response()->json([
                'quantity' => $cart[$id]['quantity'],
                'total' => $cart[$id]['quantity'] * $disg,
                'grand_total' => $grandTotal // 🔥 add this
            ]);
        }

        return response()->json([
            'error' => 'Item not found'
        ]);
    }
    public function removeCart(Request $request)
    {
        // 🔐 Logged user
        if (auth()->check()) {

            $cart = Cart::findOrFail($request->id);
            $cart->delete();

            // 🔥 Grand total calculate
            $grandTotal = 0;

            $carts = Cart::with('product')
                ->where('user_id', auth()->id())
                ->get();

            foreach ($carts as $item) {
                $price = $item->product->discount_price > 0
                    ? $item->product->price - $item->product->discount_price
                    : $item->product->price;

                $grandTotal += $price * $item->quantity;
            }

            return response()->json([
                'success' => true,
                'id' => $request->id,
                'grand_total' => $grandTotal
            ]);
        }

        // 👤 Guest user
        $cart = session()->get('cart', []);

        if (isset($cart[$request->id])) {
            unset($cart[$request->id]);
            session()->put('cart', $cart);

            // 🔥 Grand total calculate
            $grandTotal = 0;

            foreach ($cart as $item) {
                $price = $item['discount'] > 0
                    ? $item['price'] - $item['discount']
                    : $item['price'];

                $grandTotal += $price * $item['quantity'];
            }

            return response()->json([
                'success' => true,
                'id' => $request->id,
                'grand_total' => $grandTotal
            ]);
        }

        return response()->json(['error' => 'Item not found']);
    }
}
