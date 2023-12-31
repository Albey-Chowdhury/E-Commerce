<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;

class FrontendController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id','desc')->get ();
        $products = Product::orderBy('id','desc')->get();
        return view('Frontend.home.index',compact('products','categories'));
    }
    public function Store()
    {
        $products = Product::orderBy('id','desc')->get();
        return view('Frontend.home.store',compact('products'));
    }
    public function Category()
    {
        return view('Frontend.home.catagory');
    }
    public function StoreLaptops($id)
    {
        $product = Product::find($id);
        return view('Frontend.home.StoreLaptops',compact( 'product'));
    }
    public function productAddToCart(Request $request)
    {
        Cart::create([
            'product_id' => $request->product_id,
            'qty' => $request->qty ? $request->qty : 1,
            'price' => $request->price,
            'ip_address' => $request->ip()
        ]);

        $this->setSuccessMessage('Success', 'Add To Card');
        return redirect()->back();
    }
    public function cartProductRemove($id)
    {
        $cartProduct = Cart::find($id);
        $cartProduct->delete();
        $this->setSuccessMessage('Success', 'Product Remove From cart');
        return redirect()->back();
    }
    public function cartCheckout()
    {
        return view('Frontend.home.checkout');
    }
    public function viewCart(){
        return view('Frontend.home.viewCard');
    }
}
