<?php
namespace App\Services\Admin;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryService extends BaseService
{
    public function __construct(Category $category)
    {
        $this->model = $category;
    }
    
    public function getCategoryForSelect()
    {
        return $this->model->pluck('name', 'id');
    }

    public function getCategory($limit = 5)
    {
        return $this->model->orderBy('updated_at', 'desc')->paginate($limit);
    }

    public function create($inputs, $file)
    {
        $picture = $this->uploadImage($file, $this->model);
        $inputs['picture'] = $picture;
        $this->model->create($inputs);
        
        return $this->model;
    }

    public function getCategoryUpdate($id)
    {
        return $this->model->findOrFail($id);
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
        $category = $this->model->findOrFail($id);
        $inputs = $this->checkImageEmpty($inputs, $picture);
        if (!empty($inputs['picture'])) {
            $folder = detectFolderByModel($this->model);
            Storage::delete($folder . $category->picture);
        }

        return $category->update($inputs);
    }

    public function delete($id)
    {
        $category = $this->model->findOrFail($id);
        $folder = detectFolderByModel($this->model);
        Storage::delete($folder . $category->picture);

        return $category->delete();
    }

    public function find($data)
    {
        return Category::where('name', 'LIKE', '%' . $data . '%')
            ->orWhere ('description', 'LIKE', '%' . $data . '%')
            ->paginate(10);
    }
}