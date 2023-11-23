<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function savecategory(Request $request){
        $category = new Category();
        $category->category_name = $request->input('category_name');

        $category->save();
        return back()->with('status', 'Your category has been created');
    }

    public function deletecategory($id){
        $category = Category::find($id);
        $category->delete();

        return back()->with('status', 'Your category has been deleted');
    }

    public function editcategory($id){
        $category = Category::find($id);

        return view('admin.editcategory')->with('category', $category);
    }

    public function updatecategory($id, Request $request){
        $category = Category::find($id);
        $category->category_name = $request->input('category_name');

        $category->update();
        return redirect()->route('admin.categories')->with('status', 'Your category has been edited');
    }
}
