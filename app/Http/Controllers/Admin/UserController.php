<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Category_user;
use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(Users $users, Category_user $category_user)
    {
        $this->user = $users;
        $this->category_user = $category_user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->user->getCategoryUserName();
        
        return view('admin.user.index')->with(compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category_user = $this->category_user->get();

        return view('admin.user.create', compact('category_user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $createData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'category_user_id' => $request->category_user_id,
        ];
        $addUser = $this->user->insert($createData);
        if ($addUser) {
            return redirect()->route('user.index')->with('msgAddSuccess', 'Thêm danh mục thành công.');
        } else {
            return redirect()->route('user.create')->with('msgAddFail', 'Thêm danh mục không thành công.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->user->findOrFail($id);
        $category_user = $this->category_user->get();

        return view('admin.user.edit', compact('user', 'category_user'));
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
        $password = $request->password;
        if ($password == '') {
            $updateData = [
                'name' => $request->name,
                'email' => $request->email,
                'category_user_id' => $request->category_user_id,
            ];
        } else {
            $updateData = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($password),
                'category_user_id' => $request->category_user_id,
            ];
        }
        $updateUser = $this->user->updateUser($updateData, $id);
        if ($updateUser) {
            return redirect()->route('user.index')->with('msgUpdateSuccess', 'Cập nhật thành công');
        } else {
            return redirect()->route('user.edit')->with('msgUpdateFail', 'Lỗi. Vui lòng thử lại.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteUser = $this->user->deleteUser($id);
        if ($deleteUser) {
            return redirect()->route('user.index')->with('msgDeleteSuccess', 'Xóa thành công');
        } else {
            return redirect()->route('user.index')->with('msgDeleteFail', 'Xóa không thành công');
        }
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $users = $this->user->searchItem($search);
        
        return view('admin.user.index')->with(compact('users'));
    }
}
