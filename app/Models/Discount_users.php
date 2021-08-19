<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Discount_users extends Model
{
    use HasFactory;
    protected $table = 'discount_users';
    protected $primaryKey = 'id';
    public function getItem(){
        return DB::table('discount_users')->orderBy('id','desc')->get();
    }
}
