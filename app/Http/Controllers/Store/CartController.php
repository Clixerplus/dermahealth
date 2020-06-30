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
        $cart['countItem'] = count(Cart::content());
        if ($cart['countItem']==0)
            return 0;

        $cart['count'] = Cart::count();
        $count = 0;
        foreach (Cart::content() as $item) {
            $count++;
            $cart['content'][] = [
                'name'   => $item->name,
                'image'  => asset('img/product/thumbnails/' . $item->options->image),
                'price'  => priceFormated($item->price),
                'urlRemove' => route('removeItemCart', $item->rowId),
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
        return $this->getContent();
    }

    public function updateItem($rowId,$qty)
    {
        if (is_numeric($qty))
        {
            Cart::update($rowId, $qty);
        }
        return $this->getContent();
    }

    public function removeItem($rowId)
    {
        Cart::remove($rowId);
        return redirect()->back();
    }
}