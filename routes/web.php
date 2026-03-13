<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


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

    Route::post('/product-status', [ProductController::class, 'statusUpdate']);
});
require __DIR__ . '/auth.php';
