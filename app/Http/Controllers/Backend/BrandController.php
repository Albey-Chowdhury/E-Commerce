<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function add_brand()
    {
        return view("Backend.home.brand.add");
    }
    public function store_brand(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required|string|max:255',
            'image' => 'sometimes|image'
        ]);

        $imagName = time(). '.' .$request->image->extension();
        $request->image->move('images/', $imagName);

        Brand::create([
            'name' => $request->name,
            'image' => $imagName
        ]);
        $this->setSuccessMessage('Success',' Brand has been Created');
        return redirect()->back();
    }
    public function manage_brand()
    {
        $brands = Brand::select(['id','name','image'])->orderBy('id','desc')->get();
        return view("Backend.home.brand.manage",compact('brands'));
    }
    public function edit_brand($id)
    {
        $brand = Brand::find($id);
        return view("Backend.home.brand.edit",compact('brand'));
    }
    public function update_brand(Request $request , $id)
    {
       $brand = Brand::find($id);

       $this->validate($request, [
        'name' => 'required|string|max:255',
        'image' => 'sometimes|image'
       ]);

       if($request->hasfile('image')){
        if($request->image && file_exists(public_path('images/'.$category->image))){
            unlink(public_path('images/'.$brand->image));
        }else{

            $imagName = time(). '.' .$request->image->extension();
            $request->image->move('images/', $imagName);
        }
       }

       $brand->update([
            'name'=> $request->name,
       ]);

       $this->setSuccessMessage('Success',' Brand has been  Update');
        return redirect()->back();
    }
    public function delete_brand()
    {
        $brand = Brand::find($id);
        $brand->delete();
        $this->setSuccessMessage('Success',' Brand has been Delet');
        return redirect()->back();
    }
}
