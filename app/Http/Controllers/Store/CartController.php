<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Cart;

class CartController extends Controller
{
    
    public function getContent()
    {
        return Cart::content();
    }
    
    public function addItem(Product $product)
    {
        //dd($product);
        Cart::add($product->ref, $product->name, 1, $product->price, ['image' => $product->image])->associate('App\Models\Product');
        return ['count'=> Cart::count()];
    }

    public function removeItem($rowId)
    {
        Cart::remove($rowId);
        return redirect()->back();
    }
}
