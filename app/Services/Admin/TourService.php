<?php
namespace App\Services\Admin;

use App\Models\Tour;
use Illuminate\Support\Facades\Storage;

class TourService extends BaseService
{
    public function __construct(Tour $tour)
    {
        $this->model = $tour;
    }
    
    public function getTour()
    {
        return $this->model->orderBy('id', 'desc')->paginate(6);
    }

    public function setTourParam($inputs, $category_id, $file)
    {
        $inputs['category_id'] = $category_id;
        $picture = $this->uploadImage($file, $this->model);
        $inputs['picture'] = $picture;

        return $inputs;
    }

    public function create($inputs, $category_id, $file)
    {
        $tourParam = $this->setTourParam($inputs, $category_id, $file);
        $this->model->create($tourParam);
        return $this->model;
    }

    public function checkImageEmpty($inputs, $picture)
    {
        if(!empty($picture)){
            $inputs['picture'] = $this->uploadImage($picture, $this->model);
        }

        return $inputs;
    }

    public function updateTour($inputs, $id, $picture)
    {
        $tour = $this->model->findOrFail($id);
        $inputs = $this->checkImageEmpty($inputs, $picture);
        if (!empty($inputs['picture'])) {
            $folder = detectFolderByModel($this->model);
            Storage::delete($folder . $tour->picture);
        }
        $tour->update($inputs);

        return $tour;
    }

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