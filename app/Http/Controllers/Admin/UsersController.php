<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        return view('admin.user.index');
    }

    public function add(){
        return view('admin.user.add');
    }
    
    public function edit(){
        return view('admin.user.edit');
    }
    public function del(){
        return redirect()->route('admin.user.index');
    }
    public function search(){
        return view('admin.user.index');
    }
}
