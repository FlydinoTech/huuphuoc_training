<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index(){
        return view('admin.tour.index');
    }

    public function add(){
        return view('admin.tour.add');
    }
    
    public function edit(){
        return view('admin.tour.edit');
    }
    public function del(){
        return redirect()->route('admin.tour.index');
    }
    public function search(){
        return view('admin.tour.index');
    }
}
