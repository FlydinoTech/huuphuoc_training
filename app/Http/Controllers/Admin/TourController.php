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
        $tours = $this->tour->paginate(5);
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
    public function store(TourCreateRequest $request)
    {
        $path = $request->file('file')->store('/images/tour');
        $explodePath = explode('/', $path);
        $picture = end($explodePath);
        $addTourData = [
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'picture' => $picture,
            'day' => $request->day,
            'night' => $request->night,
            'price' => $request->price,
            'discount' => $request->discount,
        ];
        $addTour = $this->tour->create($addTourData);
        if ($addTour) {
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
    public function update(TourUpdateRequest $request, Tour $tour)
    {
        try {
            $inputs = $request->validated();
            $update = $this->tourService->update($inputs, $tour);
            if ($update) {
                return redirect()->route('tour.index')->with('msgUpdateSuccess', 'Cập nhật thành công');
            }
        } catch (\Exception $e) {

            return redirect()->back();
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
        Storage::delete('/images/tour/' . $tour->picture);
        $deleteTour = $tour->delete();
        if ($deleteTour) {
            return redirect()->route('tour.index')->with('msgDeleteSuccess', 'Xóa thành công');
        } else {
            return redirect()->route('tour.index')->with('msgDeleteFail', 'Xóa không thành công');
        }
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $tours = $this->tour->searchTour($search);
        
        return view('admin.tour.index')->with(compact('tours'));
    }
}
