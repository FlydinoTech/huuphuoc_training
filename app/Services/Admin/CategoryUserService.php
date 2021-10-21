<?php
namespace App\Services\Admin;

use App\Models\Category_user;

class CategoryUserService extends BaseService
{
    public function __construct(Category_user $category_user)
    {
        $this->model = $category_user;
    }
    
    public function getCategoryUser() 
    {
        return $this->model->get();
    }

    public function getUserForSelect()
    {
        return $this->model->pluck('name', 'id');
    }
}