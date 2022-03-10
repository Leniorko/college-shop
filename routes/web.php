<?php

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

// TODO: hide behind middleware
Route::get('/login', function(){
    return view('components.login');
})->name('login');

Route::get('/register', function(){
    return 'register placeholder';
})->name('register');

Route::get('/admin', function(){
    return 'admin placeholder';
})->name('admin');

Route::get('/profile', function(){
    return 'profile placeholder';
})->name('profile');
