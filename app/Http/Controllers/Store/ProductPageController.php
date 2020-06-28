<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductPageController extends Controller
{
    public function __invoke(Product $product) 
    {
        
        return view('store.product', compact('product'));
    }
}
