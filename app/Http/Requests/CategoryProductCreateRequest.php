<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryProductCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2',
            'file' => 'required',
        ];
    }
    public function messages(){
        return [
            'name.required' => trans('admin.categoryProduct.nameRequired'),
            'name.min' => trans('admin.categoryProduct.nameMin'),
            'file.required' => trans('admin.categoryProduct.pictureRequired'),
        ];
    }
}