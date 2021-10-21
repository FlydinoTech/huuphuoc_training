<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use App\Services\Admin\CategoryUserService;
use App\Services\Admin\UserService;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function __construct(UserService $userService, CategoryUserService $categoryUserService)
    {
        $this->userService = $userService;
        $this->categoryUserService = $categoryUserService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
        return $this->userService->getUser();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'category_user_id' => $request->input('category_user_id'),
            'email'    => $request->input('email'),
            'password' => $request->input('password')
        ]);
        return response([
            'user' => $user
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->userService->getUserShow($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::find($id);
    
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->category_user_id = $request->input('category_user_id');
        if ($request->password != '') {
            $user->password = $request->password;
        }
        
        $user->save();
    
        return response([
            'user' => $user
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return response([
            'result' => 'success'
        ], 200);
    }
    public function search(Request $request)
    {
        $search = $request->search;
        $users = $this->userService->find($search);
        
        return view('admin.user.index')->with(compact('users'));
    }

    public function error()
    {
        return view('admin.error');
    }
}
