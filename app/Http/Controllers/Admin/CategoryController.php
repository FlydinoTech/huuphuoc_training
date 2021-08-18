<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.cat.index');
    }

    public function add(){
        return view('admin.cat.add');
    }
    
    public function edit(){
        return view('admin.cat.edit');
    }
    public function search(){
        return view('admin.cat.index');
    }
}
