<?php
namespace App\Services\Admin;

use App\Models\Category_user;

class CategoryUserService extends BaseService
{
    public function __construct(Category_user $category_user)
    {
        $this->category_user = $category_user;
    }
    
    public function getUserForSelect()
    {
        return $this->category_user->pluck('name', 'id');
    }
}