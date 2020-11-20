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
        'Xin Chào' => 'Hello',
        'Ghét' => 'Hate',
        'Mèo' => 'Cat',
        'Cat' => 'Mèo',
        'Hate' => 'Ghét',
        'Hello' => 'Xin Chào'
    ];
    $key = array_search($word, $dictionary);
    if ($key == false) {
        $key = 'deo tim thay';
    }
    return view('translate', compact(['key']));

});
Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
        // Uses first & second middleware...
    });

    Route::get('user/profile', function () {
        // Uses first & second middleware...
    });
});
