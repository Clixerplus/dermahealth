<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store\ShippingInfoRequest;
use App\Models\Order;
use App\Models\Product;
use Cart;

class OrderController extends Controller
{
    public function __invoke(ShippingInfoRequest $request)
    {
		
		if(Cart::count() < 1)
			return redirect()->back();
		
		$order = new Order;
		$order->fill($request->except('_token'));
		$order->generateOrder();
		$order->status = 0; //Pending

		$ref = $order->ref;
		$total = Cart::total();
		$content = Cart::content();
		
    	foreach ($content as $item) {
    		$product = Product::findOrfail($item->id);
    		$order->products()->save($product, [
    			'quantity' 	=> $item->qty,
				'price' 	=> $item->price,
    		]);
		}
		$order->save();
		Cart::destroy();
		
    	//NewOrder Notification
    	//DetailUserOrder
    	
        return view('store.confirm', compact('order', 'content', 'ref','total'));
    }
}
