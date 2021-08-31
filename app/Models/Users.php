<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;
    public function addUser($data)
    {
        return Users::insert($data);
    }

    public function isAdmin($id)
    {
        return Users::where('id', $id)->whereIn('category_user_id', [1, 2])->first();
    }
}
