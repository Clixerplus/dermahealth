<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;

class CheckoutController extends Controller
{
    
    public function __invoke(){
        $empty = false;
        $cart  = Cart::instance();
        if (!$cart->count() > 0)
            $empty = true;
            
        return view('store.checkout', compact('cart', 'empty'));
            
    }
}
