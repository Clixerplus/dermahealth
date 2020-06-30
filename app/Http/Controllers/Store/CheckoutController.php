<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;

class CheckoutController extends Controller
{
    
    public function __invoke(){
        $cart = Cart::instance();
        return view('store.checkout', compact('cart'));
    }
}
