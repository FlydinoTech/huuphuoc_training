<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function getPictureUrlAttribute()
    {
        return $this->picture ? url('/storage/app/public/files/' . $this->picture) : '';
    }

    public function addCategory($data)
    {
        return Category::insert($data);
    }

    public function updateCategory($data, $id)
    {
        return Category::where('id', $id)->update($data);
    }

    public function deleteCategory($id)
    {
        return Category::where('id', $id)->delete();
    }

    public function searchItem($data){
        return Category::where('name', 'LIKE', '%' . $data . '%')
            ->orWhere ('description', 'LIKE', '%' . $data . '%')
            ->get();
    }
}
