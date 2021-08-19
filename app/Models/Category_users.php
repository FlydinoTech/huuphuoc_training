<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category_users extends Model
{
    use HasFactory;
    protected $table = 'category_users';
    protected $primaryKey = 'id';
    public function getItem(){
        return DB::table('category_users')->orderBy('id','desc')->get();
    }
}
