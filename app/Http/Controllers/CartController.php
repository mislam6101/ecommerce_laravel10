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

        return back()->with('success', 'Added to cart');
    }

    //Cart List:
    public function cartList()
    {
        if (auth()->check()) {
            $carts = Cart::with('product')
                ->where('user_id', auth()->id())
                ->get();
        } else {
            $carts = session()->get('cart', []);
        }

        return view('frontend.cart', compact('carts'));
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

            if($cart->product->discount_price > 0){
                $dis = $cart->product->price - $cart->product->discount_price;
            }
            else{
                $dis = $cart->product->price;
            }

            return response()->json([
                'quantity' => $cart->quantity,
                'total' => $cart->quantity * $dis
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

            if($cart[$id]['discount'] > 0){
                $disg = $cart[$id]['price'] - $cart[$id]['discount'];
            }
            else{
                $disg = $cart[$id]['price'];
            }

            return response()->json([
                'quantity' => $cart[$id]['quantity'],
                'total' => $cart[$id]['quantity'] * $disg
            ]);
        }

        return response()->json([
            'error' => 'Item not found'
        ]);
    }

    
}
