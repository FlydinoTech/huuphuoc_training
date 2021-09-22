<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Tên không được để trống',
            'name.min' => 'Tên không được ít hơn 2 ký tự',
            'description.required' => 'Mô tả không được để trống',
            'description.min' => 'Mô tả không được dưới 50 ký tự',
            'price.required' => 'Giá tiền không được để trống',
            'price.numeric' => 'Giá tiền phải là số',
            'discount.required' => 'Giảm giá không được để trống',
            'discount.numeric' => 'Giảm giá phải là số',
        ];
    }
}