<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Backend\ProductController;

class ProductController extends Controller
{
    public function add_Product(){
        $categories = Category::orderBy('id', 'desc')->get();
        return view('Backend.home.product.add',compact('categories'));
    }
    public function manage_Product(){
        $products = Product::with('Category')->orderBy('id', 'desc')->get();
        return view('Backend.home.product.manage',compact('products'));
    }
    public function store_Product(Request $request){

        $this->validate($request, [
            'category_id' => 'required',
            'name' => 'required|string|max:255',
            'image' => 'required|image',
            'Price' => 'required'
        ]);

        $imageName = time(). '.' . $request->image->extension();
        $request->image->move('images/', $imageName);

        $product = new Product();
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->Price = $request->Price;
        $product->qty = $request->qty;
        $product->shot_description = $request->shot_description;
        $product->long_description = $request->long_description;
        $product->type = $request->type;
        $product->image = $imageName;
        $product->save();

        $this->setSuccessMessage('Success',' Product has been Created');
        return redirect()->back();
    }
    public function delete_Product($id)
    {
        $product = Product::find($id);
        $product->delete();
        $this->setSuccessMessage('Success', ' Category has been Delete');
        return redirect()->back();
    }

}
