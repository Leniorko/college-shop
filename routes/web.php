<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\View\Components\Admin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('about');

Route::get('/shop', function(){
    return 'shop placeholder';
})->name('shop');

Route::get('/find-us', function(){
    return 'find us placeholder';
})->name('find');

Route::middleware('guest')->group(function(){
    Route::get('/login', [AuthController::class, 'loginGetHandler'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPostHandler'])->name('login');
    Route::get('/register', [AuthController::class, 'registerGetHandler'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPostHandler'])->name('register');
});

Route::middleware('auth')->group(function(){
    Route::any('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::middleware('isAdmin')->group(function(){
        Route::get('/admin', [AdminController::class, 'adminGetHandler'])->name('admin');
        Route::get('/admin/category', [AdminController::class, 'adminCategoryGetHandler'])->name('admin.categories');
        Route::get('/admin/products', [AdminController::class, 'adminProductsGetHandler'])->name('admin.products');
        Route::get('/admin/orders', [AdminController::class, 'adminOrdersGetHandler'])->name('admin.orders');
    });

});


Route::get('/profile', function(){
    return 'profile placeholder';
})->name('profile');
