<?php

namespace App\Http\Controllers\Tour;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookTourController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
