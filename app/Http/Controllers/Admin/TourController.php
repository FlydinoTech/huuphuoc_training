<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TourCreateRequest;
use App\Http\Requests\TourUpdateRequest;
use App\Models\Category;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TourController extends Controller
{
    public function __construct(Tour $tour, Category $category)
    {
        $this->tour = $tour;
        $this->category = $category;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = $this->tour->getCategoryName();

        return view('admin.tour.index')->with(compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = $this->category->get();

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
        $path = $request->file('file')->store('/images/tour');
        $explodePath = explode('/', $path);
        $picture = end($explodePath);
        $createData = [
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'picture' => $picture,
            'day' => $request->day,
            'night' => $request->night,
            'price' => $request->price,
            'discount' => $request->discount,
        ];
        $addTour = $this->tour->insert($createData);
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
    public function edit($id)
    {
        $tour = $this->tour->findOrFail($id);
        $category = $this->category->get();

        return view('admin.tour.edit', compact('tour', 'category'));
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
        $picture = $request->file('file');
        if ($picture == '') {
            $updateData = [
                'name' => $request->name,
                'category_id' => $request->category_id,
                'description' => $request->description,
                'day' => $request->day,
                'night' => $request->night,
                'price' => $request->price,
                'discount' => $request->discount,
            ];
        } else {
            $tour = $this->tour->findOrFail($id);
            Storage::delete('/images/tour/' . $tour->picture);
            $path = $request->file('file')->store('/images/tour');
            $explodePath = explode('/', $path);
            $picture = end($explodePath);
            $updateData = [
                'name' => $request->name,
                'category_id' => $request->category_id,
                'description' => $request->description,
                'picture' => $picture,
                'day' => $request->day,
                'night' => $request->night,
                'price' => $request->price,
                'discount' => $request->discount,
            ];
        }
        $updateTour = $this->tour->updateTour($updateData, $id);
        if ($updateTour) {
            return redirect()->route('tour.index')->with('msgUpdateSuccess', 'Cập nhật thành công');
        } else {
            return redirect()->route('tour.edit')->with('msgUpdateFail', 'Lỗi. Vui lòng thử lại.');
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
        $tour = $this->tour->findOrFail($id);
        Storage::delete('/images/tour/' . $tour->picture);
        $deleteTour = $this->tour->deleteTour($id);
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
