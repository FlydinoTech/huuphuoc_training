<?php

namespace App\Http\Controllers;

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

    public function bookTour($id)
    {
        $tour = $this->booktour->getTour($id);

        return view('booktour.book_tour', compact('tour'));
    }

    public function categoryTour($id)
    {
        $tourCategories = $this->booktour->getTourCategory($id);
        $category = $this->booktour->getCategoryId($id);

        return view('booktour.category_tour', compact('tourCategories', 'category'));
    }

    public function product()
    {
        return view('booktour.product');
    }

    public function allTour()
    {
        $tours = $this->booktour->getAllTour();

        return view('booktour.all_tour', compact('tours'));
    }

    public function shop()
    {
        return view('booktour.shop');
    }

    public function cart()
    {
        return view('booktour.cart');
    }

    public function checkout()
    {
        return view('booktour.checkout');
    }

    public function contact()
    {
        return view('booktour.contact');
    }
}
