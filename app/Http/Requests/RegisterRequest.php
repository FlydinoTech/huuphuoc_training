<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required|min:2|email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
            'name'  => 'required|min:2',
        ];
    }
    public function messages(){
        return [
            'email.required' => 'Email không được để trống',
            'email.min' => 'Email phải ít nhất có 5 ký tự',
            'password.required' => 'Password không được để trống',
            'password.min' => 'Password phải ít nhất có 6 ký tự',
            'confirm_password.required'	=> 'Confirm Password không được để trống',
            'confirm_password.same' => 'Mật khẩu không trùng nhau',
            'fullname.required' => 'Name không được để trống',
            'fullname.min' => 'Nname phải ít nhất có 2 ký tự',
        ];
    }
}
