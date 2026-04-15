<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function index(){
        $order = Order::with('items')->get();
        return view('backend.orders.index', compact('order'));
    }
    public function placeOrder(Request $request)
    {
        // 🛑 validation
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        // 🛒 get cart
        if (auth()->check()) {
            $carts = Cart::with('product')->where('user_id', auth()->id())->get();
        } else {
            $carts = session()->get('cart', []);
        }

        if (count($carts) == 0) {
            return back()->with('error', 'Cart is empty!');
        }

        // 💰 subtotal calculate
        $subtotal = 0;
        $itemsData = [];

        foreach ($carts as $item) {

            if (auth()->check()) {
                $price = $item->product->discount_price > 0
                    ? $item->product->price - $item->product->discount_price
                    : $item->product->price;

                $qty = $item->quantity;
                $name = $item->product->name;
            } else {
                $price = $item['discount'] > 0
                    ? $item['price'] - $item['discount']
                    : $item['price'];

                $qty = $item['quantity'];
                $name = $item['name'];
            }

            $subtotal += $price * $qty;

            $itemsData[] = [
                'name' => $name,
                'price' => $price,
                'qty' => $qty
            ];
        }

        // 🎟 coupon
        $discount = session()->get('coupon')['discount'] ?? 0;

        // 🚚 shipping
        $shipping = $request->shipping == 'indhaka' ? 80 : 150;

        $total = $subtotal - $discount + $shipping;

        // 💳 payment method
        $paymentMethod = $request->payment_method;

        // 🔴 যদি ONLINE payment হয় → redirect আগে
        if ($paymentMethod == 'online') {
            session()->put('pending_order', [
                'request' => $request->all(),
                'items' => $itemsData,
                'subtotal' => $subtotal,
                'discount' => $discount,
                'shipping' => $shipping,
                'total' => $total
            ]);

            return redirect()->route('payment.gateway');
        }

        // 🟢 COD → direct order save
        $order = Order::create([
            'order_number' => 'ORD-' . strtoupper(Str::random(8)),
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'subtotal' => $subtotal,
            'discount' => $discount,
            'shipping' => $shipping,
            'total' => $total,
            'payment_method' => 'COD',
            'payment_status' => 'pending'
        ]);

        // 🔥 order items save
        foreach ($itemsData as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_name' => $item['name'],
                'price' => $item['price'],
                'quantity' => $item['qty']
            ]);
        }

        // 🧹 cart clear
        if (auth()->check()) {
            Cart::where('user_id', auth()->id())->delete();
        } else {
            session()->forget('cart');
        }

        session()->forget('coupon');

        return redirect()->route('home.index')->with('success', 'Order placed successfully!');
    }
}
