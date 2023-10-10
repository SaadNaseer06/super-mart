<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Payment;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function orderplaced(Request $request)
    {
        // dd(str()->password(15, numbers: false));
        $cart = Cart::where('user_id' , auth()->user()->id)->get();
        $total = 0;

        foreach ($cart as $item) {
            $total += $item->price * $item->quantity;
        }
        $stripe = auth()->user()->charge($total*100, $request->paymentMethod);
        
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'contact' => $request->contact,
            'fax' => $request->fax,
            'company' => $request->company,
            'address' => $request->address,
            'postalcode' => $request->postalcode,
            'city' => $request->city,
            'country' => $request->country,
            'state' => $request->state,
            'price' => $request->price,

        ]);

        $payment = Payment::create([
            'order_id' => $order->id,
            'payment_id' => $stripe->id,
            'amount' => $order->price
        ]);

        foreach($cart as $item){
            $orderproduct = OrderProduct::create([
                'product_id' => $item->product_id,
                'order_id' => $order->id,
                'quantity' => $item->quantity
            ]);
        }

        return redirect('/');
    }
}
