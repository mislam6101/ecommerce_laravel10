<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole('customer');

        $this->mergeCart($user);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    private function mergeCart($user)
    {
        $sessionCart = session()->get('cart', []);

        if (!empty($sessionCart)) {
            foreach ($sessionCart as $productId => $item) {

                $cart = Cart::where('user_id', $user->id)
                    ->where('product_id', $productId)
                    ->first();

                if ($cart) {
                    $cart->quantity += $item['quantity'];
                    $cart->save();
                } else {
                    Cart::create([
                        'user_id' => $user->id,
                        'product_id' => $productId,
                        'quantity' => $item['quantity']
                    ]);
                }
            }

            session()->forget('cart');
        }
    }
}
