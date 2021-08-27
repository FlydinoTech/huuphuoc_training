<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct(Users $users)
    {
        $this->users = $users;
    }
    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(LoginRequest $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($data)){
            $userLogin = Auth::user();
            if (($userLogin->category_user_id == 1) || ($userLogin->category_user_id == 2)) {
                return redirect()->route('admin.index');
            } else {
                return redirect()->route('tour.index');
            }
        } else {
            return redirect()->route('auth.login')->with('msg', 'Email hoặc mật khẩu bị sai. Vui lòng đăng nhập lại!');
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function postRegister(RegisterRequest $request) 
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
            'name' => $request->name,
            'category_user_id' => 3
        ];
        $result = $this->users->addUser($data);
        if ($result) {
            return redirect()->route('auth.login')->with('msg', 'Đăng ký thành công. Vui lòng đăng nhập!');
        } else {
            return redirect()->route('auth.register')->with('msg', 'Lỗi. Vui lòng đăng ký lại!');
        }
    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('auth.login');    
    }
}
