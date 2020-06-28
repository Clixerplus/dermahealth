<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomePageController extends Controller
{
    public function __invoke() 
    {
        $product = Product::orderBy('name')->first();
        return redirect()->action('Store\ProductPageController',['product' => $product]);
    }
}
