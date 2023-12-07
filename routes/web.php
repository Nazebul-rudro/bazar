<?php

use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fontend\FontendController;


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
//     return view('ecommerce.fontend.index');
// });
// Route::get('admin', function(){
//     return view('components.admin.layouts.master');
// })->name('admin');
// Route::controller('');
Route::controller(FontendController::class,)->group(function(){
Route::get('/', 'index')->name('Bajar');
Route::get('cart', 'cart')->name('cart');
Route::get('checkout', 'checkout')->name('checkout');
Route::get('about', 'about')->name('about');
Route::get('contact', 'contact')->name('contact');
});

// Route::controller(LoginController::class,)->group(function(){
// Route::get('login', 'login')->name('login');
// });


    Route::controller(LoginController::class)->group(function(){
        Route::get('login', 'login')->name('login');
        Route::post('login', 'index')->name('login.user');
        Route::get('register', 'register')->name('register');
        Route::post('register', 'store')->name('register.store');
    });

    Route::get('admin', [Controller::class, 'index'])->name('admin');



    Route::controller(ProductController::class,)->group(function(){
        Route::get('product', 'index')->name('product');
        Route::get('product/create', 'create')->name('product.create');
        Route::post('product/create', 'store')->name('product.store');
    });


