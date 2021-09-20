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
        $category_products = $this->categoryProductService->getCategoryProduct();
        
        return view('admin.category_product.index')->with(compact('category_products'));
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
            return redirect()->route('category_product.index')->with('msgAddSuccess', 'Thêm danh mục thành công.');
        } else {
            return redirect()->route('category_product.create')->with('msgAddFail', 'Thêm danh mục không thành công.');
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
        $category_product = $this->categoryProductService->getCategoryProductUpdate($id);

        return view('admin.category_product.edit', compact('category_product'));
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
            return redirect()->route('category_product.index')->with('msgUpdateSuccess', 'Cập nhật thành công');
        } else {
            return redirect()->route('category_product.edit')->with('msgUpdateFail', 'Lỗi. Vui lòng thử lại.');
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
            return redirect()->route('category_product.index')->with('msgDeleteSuccess', 'Xóa thành công');
        } else {
            return redirect()->route('category_product.index')->with('msgDeleteFail', 'Xóa không thành công');
        }
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $category_products = $this->categoryProductService->find($search);
        
        return view('admin.category_product.index')->with(compact('category_products'));
    }
}
