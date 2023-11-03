<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Product;
use App\Models\Cart;
use App\Models\Categories;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Payment;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function orderplaced(Request $request)
    {
        // dd(str()->password(15, numbers: false));
        $cart = Cart::where('user_id', auth()->user()->id)->get();
        $total = 0;

        foreach ($cart as $item) {
            $total += $item->price * $item->quantity;
        }
        $stripe = auth()->user()->charge($total * 100, $request->paymentMethod);

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

        Payment::create([
            'order_id' => $order->id,
            'payment_id' => $stripe->id,
            'amount' => $order->price,
        ]);

        foreach ($cart as $item) {
            OrderProduct::create([
                'product_id' => $item->product_id,
                'order_id' => $order->id,
                'quantity' => $item->quantity,
            ]);
        }

        foreach ($cart as $item) {
            $item->delete();
        }

        return redirect('/');
    }
    
    public function orders()
    {
        $orders = Order::with(['user', 'products' => function ($query) {
            $query->with('product');
        }])->get();

        // dd($orders);
        return view('admin.orders.index', compact('orders'));
    }
    public function vieworders(Order $order)
    {
        $total = 0;
        foreach ($order->products as $item) {
            $total += $item->product->price * $item->quantity;
        }
        $paymentId = $order->payment->payment_id;

        return view('admin.orders.view', compact('order', 'total', 'paymentId'));
    }

    public function status(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required',
        ]);

        $order->update([
            'status' => $request->status,
        ]);
        return redirect('/orders')->with('success', 'Status Updated Successfully');
    }

    public function printinvoice(Order $order)
    {
        $total = 0;
        foreach ($order->products as $item) {
            $total += $item->product->price * $item->quantity;
        }
        $pdf = PDF::loadView('admin.orders.invoice', compact('order', 'total'));
        return $pdf->download('invoice.pdf');
    }

    public function search()
    {
        $search = request('search'); 
        $categories = Categories::all();

        $products = \App\Models\Product::search($search)->paginate(9);

        return view('users.products.index', compact('products','categories') );
    }

}