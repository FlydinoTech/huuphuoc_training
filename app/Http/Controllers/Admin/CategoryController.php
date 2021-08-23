<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $arrCategory = $this->category->getItem();
        return view('admin.category.index', compact('arrCategory'));
    }

    public function add()
    {
        return view('admin.category.add');
    }
    public function edit($id)
    {
        $arrCategory = $this->category->getItemId($id);
        return view('admin.category.edit', compact('arrCategory'));
    }
}
