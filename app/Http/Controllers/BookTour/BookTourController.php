<?php

namespace App\Http\Controllers\BookTour;

use App\Http\Controllers\Controller;
use App\Services\BookTourService;

class BookTourController extends Controller
{
    public function __construct(BookTourService $booktour)
    {
        $this->booktour = $booktour;
    }

    public function index()
    {
        $categories = $this->booktour->getCategory();

        return view('booktour.index', compact('categories'));
    }

    public function categoryTour($slug, $id)
    {
        $tours = $this->booktour->getTourCategory($id);
        $category = $this->booktour->getCategoryId($id);

        return view('booktour.category_tour', compact('tours', 'category'));
    }

    public function allTour()
    {
        $tours = $this->booktour->getAllTour();

        return view('booktour.all_tour', compact('tours'));
    }

    public function bookTour($slug, $id)
    {
        $tours = $this->booktour->getTour($id);

        return view('booktour.book_tour', compact('tours'));
    }

    public function aboutUs()
    {
        return view('booktour.about_us');
    }

    public function error()
    {
        return view('booktour.error');
    }
}
