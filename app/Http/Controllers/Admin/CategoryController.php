<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Services\Admin\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->categoryService->getCategory();
        
        return view('admin.category.index')->with(compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {
        $categoryParam = $request->validated();
        if ($this->categoryService->create($categoryParam, $request->file('file'))) {
            return redirect()->route('category.index')->with('msgAddSuccess', trans('admin.addSuccess'));
        } else {
            return redirect()->route('category.create')->with('msgAddFail', trans('admin.addError'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->categoryService->getCategoryUpdate($id);

        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
        $categoryParam = $request->validated();
        if ($this->categoryService->update($categoryParam, $id, $request->file('file'))) {
            return redirect()->route('category.index')->with('msgUpdateSuccess', trans('admin.updateSuccess'));
        } else {
            return redirect()->route('category.edit')->with('msgUpdateFail', trans('admin.updateError'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->categoryService->delete($id)) {
            return redirect()->route('category.index')->with('msgDeleteSuccess', trans('admin.deleteSuccess'));
        } else {
            return redirect()->route('category.index')->with('msgDeleteFail', trans('admin.deleteError'));
        }
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $categories = $this->categoryService->find($search);
        
        return view('admin.category.index')->with(compact('categories'));
    }
}
