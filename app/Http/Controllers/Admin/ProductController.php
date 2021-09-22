<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Services\Admin\CategoryProductService;
use App\Services\Admin\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(ProductService $productService, CategoryProductService $categoryProductService)
    {
        $this->productService = $productService;
        $this->categoryProductService = $categoryProductService;
    }

    public function index()
    {
        $products = $this->productService->getProduct();
        
        return view('admin.product.index')->with(compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryProduct = $this->categoryProductService->getCategoryProductForSelect();

        return view('admin.product.create', compact('categoryProduct'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCreateRequest $request)
    {
        $productParam = $request->all();
        if ($this->productService->create($productParam, $request->file('file'))) {
            return redirect()->route('product.index')->with('msgAddSuccess', trans('admin.addSuccess'));
        } else {
            return redirect()->route('product.create')->with('msgAddFail', trans('admin.addError'));
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
        $categoryProduct = $this->categoryProductService->getCategoryProductForSelect();
        $product = $this->productService->getProductEdit($id);

        return view('admin.product.edit', compact('categoryProduct', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, $id)
    {
        $productParam = $request->all();
        if ($this->productService->update($productParam, $id, $request->file('file'))) {
            return redirect()->route('product.index')->with('msgUpdateSuccess', trans('admin.updateSuccess'));
        } else {
            return redirect()->route('product.create')->with('msgUpdateFail', trans('admin.updateError'));
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
        if ($this->productService->delete($id)) {
            return redirect()->route('product.index')->with('msgDeleteSuccess', trans('admin.deleteSuccess'));
        } else {
            return redirect()->route('product.index')->with('msgDeleteFail', trans('admin.deleteError'));
        }
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $products = $this->productService->find($search);
        
        return view('admin.product.index')->with(compact('products'));
    }
}
