<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Store\PaymentInfoRequest;
use App\Models\Order;
use App\Models\Payment;

class PaymentController extends Controller
{
    
    
    public function store(PaymentInfoRequest $request)
    {
        $order = Order::find($request->order_ref);
        $validate = $this->validatePayment($order, $request->amount);

        if ($validate == 1) {
            $response = ['error' => 'La orden ha expirado o no posee pagos pendientes'];
        }
        elseif ($validate == 2) {
            $response = ['error' => 'El monto es inferior al registrado en la orden de venta'];
        }
        else {
            $response = ['success' => true];
        }

        return view('store.payment', $response);
        /*return view('store.payment', compact('error'));
            Payment::create($request->except('_token', 'email'));

        }}}*/
    }

    public function register(Request $request) 
    {
        
        $order = Order::find($request->ref);

         if ((!$order) || ($order->status <> 0)) {
            $response = ['error' => 'La referencia no corresponde a ninguna orden de venta pendiente de pago'];
        }
        else {
            $response = ['find' => true, 'email' => $order->email, 'ref' => $order->ref];
        }
        
        return view('store.payment', $response);
    }

    private function validatePayment(Order $order, $amount)
    {

        if (!$order->isPending && $order->isExpired )
            return 1;
        
        if ($order->convertAmount > $amount)
            return 2;    
            
        return 0;
    }
}
