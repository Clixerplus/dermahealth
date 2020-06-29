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
        $cart['count'] = count(Cart::content());
        if ($cart['count']==0)
            return 0;

        $count=0;
        foreach (Cart::content() as $item) {
            $count++;
            $cart['content'][] = [
                'name'   => $item->name,
                'image'  => asset('img/product/thumbnails/' . $item->options->image),
                'price'  => priceFormated($item->price),
                'remove' => route('removeItemCart', $item->rowId),
            ];
            if ($count == 3)
                break;
        }
        return response()->json($cart);
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
