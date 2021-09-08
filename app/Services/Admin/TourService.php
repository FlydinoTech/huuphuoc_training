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

    public function setTourParam($inputs, $category_id, $file)
    {
        $inputs['category_id'] = $category_id;
        $picture = $this->uploadImage($file, $this->model);
        $inputs['picture'] = $picture;

        return $inputs;
    }

    public function create($model, $inputs, $category_id, $file)
    {
        $tourParam = $this->setTourParam($inputs, $category_id, $file);
        $model->create($tourParam);
        
        return $model;
    }

    public function checkImageEmpty($inputs, $picture)
    {
        if(!empty($picture)){
            $inputs['picture'] = $this->uploadImage($picture, $this->model);
        }

        return $inputs;
    }

    public function update($model, $inputs, $picture)
    {
        $inputs = $this->checkImageEmpty($inputs, $picture);
        if (!empty($inputs['picture'])) {
            $folder = detectFolderByModel($this->model);
            Storage::delete($folder . $model->picture);
        }
        $model->update($inputs);

        return $model;
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