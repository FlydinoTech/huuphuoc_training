<?php
namespace App\Services;

use App\Models\Category;
use App\Models\Tour;

class BookTourService
{
    public function __construct(Tour $tour, Category $category)
    {
        $this->tour = $tour;
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category->get();
    }

    public function getCategoryId($id)
    {
        return $this->category->findOrFail($id);
    }

    public function getTourCategory($id)
    {
        return $this->tour->where('category_id', $id)->paginate(6);
    }

    public function getTour($id)
    {
        return $this->tour->findOrFail($id);
    }

    public function getAllTour()
    {
        return $this->tour->paginate(6);
    }
}