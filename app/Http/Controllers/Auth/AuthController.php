<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $loginData = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($loginData)) {
            $this->user = Auth::user();
            if ($this->user->isAdmin()) {
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
        $registerData = [
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'name' => $request->name,
            'category_user_id' => 3,
        ];
        $registerUser = $this->user->create($registerData);
        if ($registerUser) {
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

    public function error()
    {
        return view('auth.error');
    }
}
