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
    return view('dictionary');
});
Route::post('/translate', function (\Illuminate\Http\Request $request) {
    $word = $request->word;
    $dictionary = [
        'Hello' => 'Xin Chào',
        'Hate' => 'Ghét',
        'Cat' => 'Mèo'
    ];
    $key = array_search($word,$dictionary);
    return view('translate',compact(['key']));
});

