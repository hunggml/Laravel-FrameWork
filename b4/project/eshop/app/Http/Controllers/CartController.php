<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function showCart()
    {
        return view('front-end.cart.cart');
    }

    public function showCheckOut()
    {
        return view('front-end.cart.checkOut');
    }
}
