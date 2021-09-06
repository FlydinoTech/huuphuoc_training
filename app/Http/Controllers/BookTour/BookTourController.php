<?php

namespace App\Http\Controllers\BookTour;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tour;
use Illuminate\Http\Request;

class BookTourController extends Controller
{
    public function __construct(Category $category, Tour $tour)
    {
        $this->category = $category;
        $this->tour = $tour;
    }
    public function index()
    {
        $categories = $this->category->get();

        return view('tour.index', compact('categories'));
    }

    public function categoryTour($slug, $id)
    {
        $tours = $this->tour->getTourCategory($id);
        $category = $this->category->getCategory($id);

        return view('tour.category_tour', compact('tours', 'category'));
    }

    public function allTour()
    {
        $tours = $this->tour->getAllTour();

        return view('tour.all_tour', compact('tours'));
    }

    public function bookTour($slug, $id)
    {
        $tours = $this->tour->getTour($id);

        return view('tour.book_tour', compact('tours'));
    }

    public function aboutUs()
    {
        return view('tour.about_us');
    }

    public function error()
    {
        return view('tour.error');
    }
}
