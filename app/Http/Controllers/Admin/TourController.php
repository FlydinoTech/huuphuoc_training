<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TourCreateRequest;
use App\Http\Requests\TourUpdateRequest;
use App\Models\Category;
use App\Models\Tour;
use App\Services\Admin\TourService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TourController extends Controller
{
    public function __construct(Tour $tour, Category $category, TourService $tourService)
    {
        $this->tour = $tour;
        $this->category = $category;
        $this->tourService = $tourService;
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
    public function create(Category $category)
    {
        return view('admin.tour.create', ['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TourCreateRequest $request, Tour $tour)
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
    public function edit(Tour $tour, Category $category)
    {
        return view('admin.tour.edit', ['tour' => $tour, 'category' => $category]);
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
        if ($this->tourService->updateTour($tourParam, $id, $request->file('file'))) {
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
    public function destroy(Tour $tour)
    {
        if ($this->tourService->delete($tour)) {
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
