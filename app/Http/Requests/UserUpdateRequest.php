<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'confirm_password' => 'same:password',
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Tên không được để trống',
            'name.min' => 'Tên phải ít nhất có 2 ký tự',
            'confirm_password.same' => 'Confirm Password phải giống Password',
        ];
    }
}