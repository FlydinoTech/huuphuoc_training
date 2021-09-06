<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Tour extends Model
{
    use HasFactory;

    public function getPictureUrlAttribute()
    {
        return $this->picture ? Storage::url('/images/tour/' . $this->picture) : '';
    }

    public function getCategoryName()
    {
        return Tour::join('categories', 'tours.category_id', '=', 'categories.id')
            ->select('*', 'tours.name as name', 'tours.id as id', 'categories.name as cat_name',
            'tours.description as description', 'tours.picture as picture',)->paginate(5);
    }

    public function updateTour($data, $id)
    {
        return Tour::where('id', $id)->update($data);
    }

    public function deleteTour($id)
    {
        return Tour::where('id', $id)->delete();
    }

    public function searchTour($data){
        return Tour::where('name', 'LIKE', '%' . $data . '%')
            ->orWhere ('description', 'LIKE', '%' . $data . '%')
            ->orWhere ('day', 'LIKE', '%' . $data . '%')
            ->orWhere ('night', 'LIKE', '%' . $data . '%')
            ->orWhere ('price', 'LIKE', '%' . $data . '%')
            ->orWhere ('discount', 'LIKE', '%' . $data . '%')
            ->paginate(5);
    }
}
