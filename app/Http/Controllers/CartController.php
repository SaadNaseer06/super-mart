<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Categories;
use App\Models\Order;
use App\Models\Product;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addtocart(Request $request)
    {

        $product = Product::where('id', $request->product_id)->first();

        $result = Cart::create([
            'user_id' => auth()->user()->id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'image' => $product->image,
            'name' => $product->name,
            'price' => $product->price,
            'description' => $product->price,
        ]);

        if (isset($result)) {

            return response()->json([
                'status' => 200,
                'message' => 'Product Added To Cart Successfully.',
            ], 200);

        } else {

            return response()->json([
                'status' => 400,
                'message' => 'Something went wrong, Please try again.',
            ], 400);
        }
    }

    public function deletecart($id)
    {
        $carts = Cart::where('id', $id)->delete();
        return response()->json([
            'status' => 200,
            'message' => 'Product Deleted To Cart Successfully.',
        ], 200);
    }

    public function cart()
    {
        $carts = Cart::where('user_id', Auth::id())->get();
        $total = 0;

        foreach ($carts as $cart) {
            $total += $cart->price * $cart->quantity;
        }
        return view('users.products.viewcart', compact('carts', 'total'));
    }
    public function cartPost(Request $request, $id)
    {
        if (Auth::id()) {
            $user = auth()->user();
            $product = Product::find($id);
            $cart = new Cart;
            $cart->product_id = $product->id;
            $cart->user_id = $user->id;
            $cart->image = $product->image;
            $cart->name = $product->name;
            $cart->price = $product->price;
            $cart->description = $product->description;
            $cart->quantity = $request->quantity;

            $cart->save();
            return response()->json([$user, $product, $cart]);
        } else {
            return redirect('/login');
        }
    }
    public function destroy($id)
    {
        Cart::where('id', $id)->delete();
        return back();
    }

    public function checkout(Request $request)
    {
        $user = auth()->user();
        $products = Cart::where('user_id', Auth::id())->get();
        $carts = Cart::where('user_id', Auth::id())->get();
        $total = 0;

        foreach ($carts as $cart) {
            $total += $cart->price * $cart->quantity;
        }
        return view('users.products.checkout', compact('products', 'total'), [
            'intent' => $user->createSetupIntent(),

        ]);
    }

    public function order(Request $request)
    {
        $user = auth()->user();
        $request->validate = [
            'contact' => 'required',
            'address' => 'required|max:255|',
            'fname' => 'required',
            'lastname' => 'required',
            'city' => 'required',
            'country' => 'required',
        ];
        $order = new Order;
        $order->user_id = $user->id;
        $order->price = $request->price;
        $order->contact = $request->contact;
        $order->firstname = $request->fname;
        $order->lastname = $request->lname;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->counntry = $request->Country;
        $order->save();

        return back()->with('success', 'order placed');
    }

    public function view()
    {
        return view('admin.products.category');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $category = new Categories;
        $category->name = $request->name;
        $category->save();
        return back()->with('success', 'Category Added');
    }

    public function category()
    {
        $categories = Categories::get();
        return view('admin.products.categoryview', compact('categories'));
    }

    public function categorydestroy($id)
    {
        $categories = Categories::where('id', $id);
        $categories->delete();
        return back()->with('success', 'Category Deleted');
    }

    public function categoryproducts($id)
    {
        $categories = Categories::all();
        $carts = Cart::where('user_id', Auth::id())->get();
        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart->price * $cart->quantity;
        }

        $products = Product::where('category_id', $id)->paginate(6);
        return view('users.products.index', compact('categories', 'products', 'carts', 'total'));
    }

    public function singlecharge(Request $request)
    {
        return $request->all();
    }

}
