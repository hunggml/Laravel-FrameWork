<?php

use App\Http\Controllers\CartController;
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
//home
Route::get('/', function () {
    return view('front-end.home');
})->name('home');
//end-home

Route::prefix('Cart')->group(function () {
    Route::get('/', [CartController::class, 'showCart'])->name('cart.showCart');
    Route::get('Check-Out', [CartController::class, 'showCheckOut'])->name('cart.showCheckOut');
});

Route::get('/Shop-Grid', function () {
    return view('front-end.shopGrid');
})->name('shopGrid');

Route::get('Contact', function () {
    return view('front-end.contact');
})->name('contact');

Route::get('Blog', function () {
    return view('front-end.blog');
})->name('blog');
