<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Cart;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user = auth()->user();

        if ($user->hasRole('admin')) {
            return redirect('/admin/dashboard');
        }

        if ($user->hasRole('staff')) {
            return redirect('/staff/dashboard');
        }

        return redirect('/customer/dashboard');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    //Cart Marge after login:
    protected function authenticated(Request $request, $user)
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
