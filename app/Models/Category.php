<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    public function getItem()
    {
        return DB::table('categories')->get();
    }

    public function getItemId($id)
    {
        return DB::table('categories')->where('id',$id)->first();
    }
}
