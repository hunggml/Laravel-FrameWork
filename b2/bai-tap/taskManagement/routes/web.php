<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
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
Route::get('/',function (){
   return view('index');
})->name('home');

Route::get('/register',[AuthController::class,'showFormRegister'])->name('register.showFormRegister');
Route::post('/register',[AuthController::class,'register'])->name('register.register')->middleware('checkAge');

Route::prefix('customer')->group(function (){
    Route::get('/',[CustomerController::class,'customerList'])->name('customer.customerList');
    Route::get('/create',[CustomerController::class,'create'])->name('customer.create');
    Route::post('/store',[CustomerController::class,'store'])->name('customer.store');
    Route::get('/{id}/edit',[CustomerController::class,'edit'])->name('customer.edit');
    Route::patch('/{id}/update',[CustomerController::class,'update'])->name('customer.update');
});
