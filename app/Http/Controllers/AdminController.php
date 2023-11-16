<?php

namespace App\Http\Controllers;

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
        return view('admin.categories');
    }
}
