<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
        ];
    }
    public function messages(){
        return [
            'name.required' => trans('admin.product.nameRequired'),
            'name.min' => trans('admin.product.nameMin'),
            'description.required' => trans('admin.product.descriptionRequired'),
            'description.min' => trans('admin.product.descriptionMin'),
            'file.required' => trans('admin.product.pictureRequired'),
            'price.required' => trans('admin.product.priceRequired'),
            'price.numeric' => trans('admin.product.priceNumberic'),
            'discount.required' => trans('admin.product.discountRequired'),
            'discount.numeric' => trans('admin.product.discountNumberic'),
        ];
    }
}