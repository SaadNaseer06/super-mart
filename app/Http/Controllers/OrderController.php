<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {   
        $payment = auth()->user()->charge($request->price, $request->paymentMethod);
        dd($payment->id);
        
        $order = Order::create([
            "user_id" => auth()->user()->id,
            "firstname" => $request->firstname,
            "lastname" => $request->lastname,
            "email" => $request->email,
            "contact" => $request->contact ,
            "fax" => $request->fax,
            "company" => $request->company,
            "address" => $request->address,
            "postalcode" => $request->postalcode,
            "city" => $request->city,
            "country" => $request->country,
            "state" => $request->state,
            "price" => $request->price,
        ]);
        return redirect('/')->with('success', 'Order Placed');
        
    }

    public function bankDetails(Request $request)
    {
    }
}
