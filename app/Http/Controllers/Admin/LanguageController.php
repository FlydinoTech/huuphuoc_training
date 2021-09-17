<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function index($language)
    {
        Session::put('language', $language);
        return redirect()->back();
    }
}
