<?php
namespace App\Services\Admin;

use App\Models\Category;

class CategoryService extends BaseService
{
    public function __construct(Category $category)
    {
        $this->model = $category;
    }
    
    public function getCategory()
    {
        return $this->model->get();
    }

}