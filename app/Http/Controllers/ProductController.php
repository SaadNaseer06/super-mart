<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Categories;
use App\Models\Order;
use Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Process;
use Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('admin.products.index', [
            'products'=> Product::latest()->get() ]);
    }
    public function create()
    {
        $categories = Categories::all();
        // $categories->save();
        return view('admin.products.create',compact('categories'));
        
    }
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:1000'
         ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('products'), $imageName);
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->image = $imageName;
        $product->save();

        return redirect('/admin')->withsuccess('Product Created!!!');  
    }

    public function edit($id)
    {
        $product = Product::where('id',$id)->first();
        return view('admin.products.edit',['product' => $product]);
        
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:1000'
         ]);
         $product = Product::where('id',$id)->first();

        if(isset($request->image)) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('products'), $imageName);
            $product->image = $imageName;
        } 
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();
        return redirect('/')->withsuccess('Product Updated!!!');        
    }
    public function destroy($id) 
    {
        $product = Product::where('id',$id);
        $product->delete();
        return back()->withsuccess('Product Deleted!!!');
    }

    public function viewproducts()
    {
        
        $user = auth()->user();
        $products = Product::all();
        $search = request('search');
        $results = Product::search($search)->get();
        return view('users.products.index',compact('products','results'));
            
    }


    public function addtocart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {

            $cart[$id]['qty'] = $request->quantity;

        } else {

            $cart[$id] = [

                "name" => $product->name,

                "qty" => 1,

                "price" => $product->price,

                "image" => $product->image

            ];
        }
        session()->put('cart', $cart);
        
        return view('users.products.cart',compact('product'))->with('success', 'Product has been added to cart!');
    }

    public function products($id)
    {
        $products = Product::where('id', $id)->first();
        return view('users.products.view',compact('products'));
    }

    public function productspost(Request $request, $id)
    {
        dd($request->all());
        if (Auth::id()) {
            $user = auth()->user();
            $product = Product::find($id);
            $cart = new Cart;
            $cart->product_id =$product->id;
            $cart->user_id    =$user->id;
            $cart->image      =$product->image;
            $cart->name       =$product->name;
            $cart->price      =$product->price;
            $cart->description=$product->description;
            $cart->quantity   =$request->quantity;
            dd($cart);
            $cart->save();
            return redirect()->back();
        } else {
            return redirect('/login');
        }
    }
}