<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryCreateRequest extends FormRequest
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
            'description' => 'required|min:50',
            'file' => 'required',
        ];
    }
    public function messages(){
        return [
            'name.required' => trans('admin.category.nameRequired'),
            'name.min' => trans('admin.category.nameMin'),
            'description.required' => trans('admin.category.descriptionRequired'),
            'description.min' => trans('admin.category.descriptionMin'),
            'file.required' => trans('admin.category.pictureRequired'),
        ];
    }
}
