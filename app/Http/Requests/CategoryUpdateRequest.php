<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
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
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Tên không được để trống',
            'name.min' => 'Tên không được ít hơn 2 ký tự',
            'description.required' => 'Mô tả không được để trống',
            'description.min' => 'Mô tả không được dưới 50 ký tự',
        ];
    }
}
