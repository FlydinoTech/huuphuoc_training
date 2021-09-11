<?php
namespace App\Services\Admin;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryService extends BaseService
{
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    
    public function getCategoryForSelect()
    {
        return $this->category->pluck('name', 'id');
    }

    public function getCategory()
    {
        return $this->category->orderBy('updated_at', 'desc')->paginate(5);
    }

    public function create($inputs, $file)
    {
        $picture = $this->uploadImage($file, $this->category);
        $inputs['picture'] = $picture;
        $this->category->create($inputs);
        
        return $this->category;
    }

    public function getCategoryUpdate($id)
    {
        return $this->category->findOrFail($id);
    }

    public function checkImageEmpty($inputs, $picture)
    {
        if (!empty($picture)) {
            $inputs['picture'] = $this->uploadImage($picture, $this->category);
        }

        return $inputs;
    }

    public function update($inputs, $id, $picture)
    {
        $category = $this->category->findOrFail($id);
        $inputs = $this->checkImageEmpty($inputs, $picture);
        if (!empty($inputs['picture'])) {
            $folder = detectFolderByModel($this->category);
            Storage::delete($folder . $category->picture);
        }

        return $category->update($inputs);
    }

    public function delete($id)
    {
        $category = $this->category->findOrFail($id);
        $folder = detectFolderByModel($this->category);
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