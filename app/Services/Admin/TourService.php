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
        return $this->model->orderBy('updated_at', 'desc')->paginate(6);
    }

    public function getTourEdit($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create($inputs, $file)
    {
        $picture = $this->uploadImage($file, $this->model);
        $inputs['picture'] = $picture;
        $this->model->create($inputs);
        
        return $this->model;
    }

    public function checkImageEmpty($inputs, $picture)
    {
        if (!empty($picture)) {
            $inputs['picture'] = $this->uploadImage($picture, $this->model);
        }

        return $inputs;
    }

    public function update($inputs, $id, $picture)
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

    public function delete($id)
    {
        $tour = $this->model->findOrFail($id);
        $folder = detectFolderByModel($this->model);
        Storage::delete($folder . $tour->picture);
        $tour->delete();

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