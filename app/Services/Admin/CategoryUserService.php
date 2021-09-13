<?php
namespace App\Services\Admin;

use App\Models\Category_user;

class CategoryUserService extends BaseService
{
    public function __construct(Category_user $category_user)
    {
        $this->model = $category_user;
    }
    
    public function getUserForSelect()
    {
        return $this->model->pluck('name', 'id');
    }
}