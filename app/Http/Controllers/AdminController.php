<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        return view('admin.home');
    }

    public function addcategory(){
        return view('admin.addcategory');
    }

    public function categories(){
        $categories = Category::get();
        return view('admin.categories')->with('categories', $categories);
    }

    public function addslider(){
        return view('admin.addslider');
    }

    public function sliders(){
        return view('admin.sliders');
    }

    public function addproduct(){
        return view('admin.addproduct');
    }

    public function products(){
        return view('admin.products');
    }

    public function orders(){
        return view('admin.orders');
    }
}
