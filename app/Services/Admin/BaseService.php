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

    public function update($inputs, $model)
    {
        if (!empty($inputs['picture'])) {
            $folder = detectFolderByModel($model);
            Storage::delete($folder . $model->picture);
        }
        $model->update($inputs);

        return $model;
    }
}