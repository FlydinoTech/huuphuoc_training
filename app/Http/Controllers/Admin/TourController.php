<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TourCreateRequest;
use App\Http\Requests\TourUpdateRequest;
use App\Models\Tour;
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
        return $this->tourService->getTour();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $category = $this->categoryService->getCategoryForSelect();

        // return view('admin.tour.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TourCreateRequest $request)
    {
        $tour = Tour::create([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
            'description'    => $request->input('description'),
            'day' => $request->input('day'),
            'night' => $request->input('night'),
            'price' => $request->input('price'),
            'discount' => $request->input('discount'),
        ]);
        return response([
            'tour' => $tour
        ], 200);
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
        $category = $this->categoryService->getCategoryForSelect();
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
        $tour = Tour::find($id);
    
        $tour->name = $request->input('name');
        $tour->category_id = $request->input('category_id');
        $tour->description = $request->input('description');
        $tour->day = $request->input('day');
        $tour->night = $request->input('night');
        $tour->price = $request->input('price');
        $tour->discount = $request->input('discount');
        
        $tour->save();
    
        return response([
            'tour' => $tour
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tour = Tour::find($id);
        $tour->delete();
        return response([
            'result' => 'success'
        ], 200);
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $tours = $this->tourService->find($search);
        
        return view('admin.tour.index')->with(compact('tours'));
    }
}
