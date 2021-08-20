<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category_user extends Model
{
    use HasFactory;
    public function getItem()
    {
        return DB::table('category_users')->orderBy('id','desc')->get();
    }
}
