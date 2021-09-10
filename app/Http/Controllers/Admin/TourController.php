<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TourCreateRequest;
use App\Http\Requests\TourUpdateRequest;
use App\Services\Admin\CategoryService;
use App\Services\Admin\TourService;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function __construct(TourService $tourService, CategoryService $categoryService)
    {
        $this->tourService = $tourService;
        $this->categoryService = $categoryService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = $this->tourService->getTour();
        
        return view('admin.tour.index')->with(compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = $this->categoryService->getCategory();

        return view('admin.tour.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TourCreateRequest $request)
    {
        $tourParam = $request->validated();
        if ($this->tourService->create($tourParam, $request->category_id, $request->file('file'))) {
            return redirect()->route('tour.index')->with('msgAddSuccess', 'Thêm danh mục thành công.');
        } else {
            return redirect()->route('tour.create')->with('msgAddFail', 'Thêm danh mục không thành công.');
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
        $category = $this->categoryService->getCategory();
        $tour = $this->tourService->getTourEdit($id);

        return view('admin.tour.edit', compact('category', 'tour'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TourUpdateRequest $request, $id)
    {
        $tourParam = $request->validated();
        if ($this->tourService->update($tourParam, $id, $request->file('file'))) {
            return redirect()->route('tour.index')->with('msgUpdateSuccess', 'Cập nhật thành công');
        } else {
            return redirect()->route('tour.create')->with('msgAddFail', 'Thêm danh mục không thành công.');
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
        if ($this->tourService->delete($id)) {
            return redirect()->route('tour.index')->with('msgDeleteSuccess', 'Xóa thành công');
        } else {
            return redirect()->route('tour.index')->with('msgDeleteFail', 'Xóa không thành công');
        }
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $tours = $this->tourService->find($search);
        
        return view('admin.tour.index')->with(compact('tours'));
    }
}
