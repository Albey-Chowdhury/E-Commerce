<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
class CategoryController extends Controller
{

    public function store_Catagory(Request $request)
    {
           $this->validate($request, [
            'name' => 'required|string|max:255',
            'image' => 'sometimes|image'
        ]);

         $imageName = time(). '.' . $request->image->extension();
         $request->image->move('images/', $imageName);

         Category::create([
            'name' => $request->name,
            'image' => $imageName
        ]);
        $this->setSuccessMessage('Success',' Category has been Created');
        return redirect()->back();
    }

        public function add_Category()
    {
        return view('Backend.home.category.add');
        $this->setSuccessMessage('Success', ' Category has been Created');

    }
    public function manage_Category()
    {
        $categories = Category::select(['id','name','image'])->orderBy('id',"desc")->get();
        return view('Backend.home.category.manage',compact('categories'));

    }
    public function delete_Category($id)
    {
         $category = Category::find($id);
         $category->delete();
         $this->setSuccessMessage('Success', ' Category has been Delete');
         return redirect()->back();
    }
    public function edit_Category($id)
    {
        $category = Category::find($id);
        return view('Backend.home.category.edit',compact('category'));
    }
    public function update_Catagory(CategoryRequest $request, $id){

        $category = Category::find($id);

        if($request->hasfile('image')){
            if($request->image && file_exists(public_path('images/'.$category->image))){
                unlink(public_path('images/'.$category->image));

            }else{

                    $imageName = time(). '.' . $request->image->extension();
                    $request->image->move('images/', $imageName);
                }

                $category->image = $imageName;
        }
        $category->update([
            'name' => $request->name,
        ]);
        $this->setSuccessMessage('Success',' Category has been Update');
        return redirect()->back();

    }





















}
