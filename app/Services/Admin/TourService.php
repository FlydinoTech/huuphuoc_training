<?php
namespace App\Services\Admin;

use App\Models\Tour;

class TourService extends BaseService
{
    public function find($data)
    {
        return Tour::where('name', 'LIKE', '%' . $data . '%')
            ->orWhere ('description', 'LIKE', '%' . $data . '%')
            ->orWhere ('day', 'LIKE', '%' . $data . '%')
            ->orWhere ('night', 'LIKE', '%' . $data . '%')
            ->orWhere ('price', 'LIKE', '%' . $data . '%')
            ->orWhere ('discount', 'LIKE', '%' . $data . '%')
            ->paginate(5);
    }
}