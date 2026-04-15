<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });




Route::get('/', [HomeController::class, 'index']);
Route::resource('home', HomeController::class);

Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/product/{id}', [ShopController::class, 'productDetails'])->name('product.details');

Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('/cart/update', [CartController::class, 'updateCart']);
Route::post('/cart/remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('/apply-coupon', [CartController::class, 'applyCoupon']);

// Checkout page
Route::get('/checkout', [\App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout.index');
// Checkout submit
Route::post('/checkout', [\App\Http\Controllers\CheckoutController::class, 'placeOrder'])->name('checkout.place');

//Place Order:
Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('order.place');

Route::resource('about', AboutController::class);

//THis is mine:

Route::middleware('auth')->get('/redirect-dashboard', function () {

    $user = Auth::user();

    if ($user->hasRole('admin')) {
        return redirect('/admin/dashboard');
    }

    if ($user->hasRole('staff')) {
        return redirect('/staff/dashboard');
    }

    if ($user->hasRole('customer')) {
        return redirect('/customer/dashboard');
    }
});


Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'index']);
    Route::get('/admin/staffs', [StaffController::class, 'a_index'])->name('admin.staff.a_index');
    Route::get('/admin/staff/create', [StaffController::class, 'create'])->name('admin.staff.create');
    Route::post('/admin/staff/store', [StaffController::class, 'store'])->name('admin.staff.store');
    Route::post('/admin/staff/status', [StaffController::class, 'changeStatus'])->name('admin.staff.status');
});

Route::middleware(['auth', 'check.status', 'role:staff'])->group(function () {

    Route::get('/staff/dashboard', [StaffController::class, 'index']);
});

Route::middleware(['auth', 'role:customer'])->group(function () {

    Route::get('/customer/dashboard', [CustomerController::class, 'index']);
});

Route::middleware(['auth', 'role:admin|staff'])->group(function () {

    Route::resource('categories', CategoryController::class);

    Route::resource('products', ProductController::class);
    Route::resource('coupon', CouponController::class);

    Route::post('/product-status', [ProductController::class, 'statusUpdate']);
    Route::get('/orders',[OrderController::class, 'index'])->name('order.index');
    Route::post('/admin/order/status', [OrderController::class, 'updateStatus'])->name('order.status');
});
require __DIR__ . '/auth.php';
