<?php
namespace App\Services\Admin;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductService extends BaseService
{
    public function __construct(Product $product)
    {
        $this->model = $product;
    }
    
    public function getProduct()
    {
        return $this->model->orderBy('updated_at', 'desc')->paginate(6);
    }

    public function getProductEdit($id)
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
        $product = $this->model->findOrFail($id);
        $inputs = $this->checkImageEmpty($inputs, $picture);
        if (!empty($inputs['picture'])) {
            $folder = detectFolderByModel($this->model);
            Storage::delete($folder . $product->picture);
        }
        $product->update($inputs);

        return $product;
    }

    public function delete($id)
    {
        $product = $this->model->findOrFail($id);
        $folder = detectFolderByModel($this->model);
        Storage::delete($folder . $product->picture);
        $product->delete();

        return $product;
    }

    public function find($data)
    {
        return Product::where('name', 'LIKE', '%' . $data . '%')
            ->orWhere ('description', 'LIKE', '%' . $data . '%')
            ->orWhere ('price', 'LIKE', '%' . $data . '%')
            ->orWhere ('discount', 'LIKE', '%' . $data . '%')
            ->paginate(5);
    }
}