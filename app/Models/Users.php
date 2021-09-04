<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;

    public function getCategoryUserName()
    {
        return Users::join('category_users', 'users.category_user_id', '=', 'category_users.id')
            ->select('*','users.id as id', 'users.name as name', 'category_users.name as category_user_name')->get();
    }

    public function updateUser($data, $id)
    {
        return User::where('id', $id)->update($data);
    }

    public function deleteUser($id)
    {
        return User::where('id', $id)->delete();
    }

    public function searchItem($data){
        return User::where('name', 'LIKE', '%' . $data . '%')
            ->orWhere ('email', 'LIKE', '%' . $data . '%')
            ->get();
    }
}
