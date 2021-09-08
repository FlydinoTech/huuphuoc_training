<?php
namespace App\Services\Admin;

use Illuminate\Support\Facades\Storage;

class BaseService
{

    protected $model;

    public function uploadImage($file, $model)
    {
        $folder = detectFolderByModel($model);
        $path = Storage::putFile($folder, $file);
        $explodePath = explode('/', $path);
        $picture = end($explodePath);
    
        return $picture;
    }

    public function delete($model)
    {
        $folder = detectFolderByModel($this->model);
        Storage::delete($folder . $model->picture);
        $model->delete();

        return $model;
    }
}
