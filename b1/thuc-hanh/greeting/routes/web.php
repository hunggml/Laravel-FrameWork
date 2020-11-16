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
});

Route::get('/greeting/{name?}', function ($name = null) {
    if ($name) {
        echo "Hello " . $name . "!";
    } else {
        echo "Hello You !";
    }
});

Route::get('/login', function () {
    return view('/login');
});

Route::post('/login', function (\Illuminate\Http\Request $request) {
    if ($request->user == "admin" && $request->pass == "123456") {
        return view('/welcome_admin');
    } else {
        return view('/login_error');
    }
});
