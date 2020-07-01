<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store\ShippingInfoRequest;
use App\Models\Order;
use App\Models\Product;
use App\Models\Currency;
use Cart;

class OrderController extends Controller
{
    public function __invoke(ShippingInfoRequest $request)
    {
		
		if(Cart::count() < 1)
			return redirect()->back();

		$order = Order::generateOrder($request->except('_token', 'qty'));
		$content = Cart::content();
    	foreach ($content as $item) {
    		$product = Product::findOrfail($item->id);
    		$order->products()->save($product, [
    			'quantity' 	=> $item->qty,
				'price' 	=> $item->price,
    		]);
		}
		Cart::destroy();
		
    	//NewOrder Notification
    	//DetailUserOrder
    	
        return view('store.confirm', compact('order', 'content'));
	}
	
	
}
