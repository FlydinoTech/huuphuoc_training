<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryProductCreateRequest;
use App\Http\Requests\CategoryProductUpdateRequest;
use App\Services\Admin\CategoryProductService;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(CategoryProductService $categoryProductService)
    {
        $this->categoryProductService = $categoryProductService;
    }

    public function index()
    {
        $categoryProducts = $this->categoryProductService->getCategoryProduct();
        
        return view('admin.category_product.index')->with(compact('categoryProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category_product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryProductCreateRequest $request)
    {
        $categoryProductParam = $request->validated();
        if ($this->categoryProductService->create($categoryProductParam, $request->file('file'))) {
            return redirect()->route('category_product.index')->with('msgAddSuccess', trans('admin.addSuccess'));
        } else {
            return redirect()->route('category_product.create')->with('msgAddFail', trans('admin.addError'));
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
        $categoryProduct = $this->categoryProductService->getCategoryProductUpdate($id);

        return view('admin.category_product.edit', compact('categoryProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryProductUpdateRequest $request, $id)
    {
        $categoryProductParam = $request->validated();
        if ($this->categoryProductService->update($categoryProductParam, $id, $request->file('file'))) {
            return redirect()->route('category_product.index')->with('msgUpdateSuccess', trans('admin.updateSuccess'));
        } else {
            return redirect()->route('category_product.edit')->with('msgUpdateFail', trans('admin.updateError'));
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
        if ($this->categoryProductService->delete($id)) {
            return redirect()->route('category_product.index')->with('msgDeleteSuccess', trans('admin.deleteSuccess'));
        } else {
            return redirect()->route('category_product.index')->with('msgDeleteFail', trans('admin.deleteError'));
        }
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $categoryProducts = $this->categoryProductService->find($search);
        
        return view('admin.category_product.index')->with(compact('categoryProducts'));
    }
}
