<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Discount_codes extends Model
{
    use HasFactory;
    protected $table = 'discount_codes';
    protected $primaryKey = 'id';
    public function getItem(){
        return DB::table('discount_codes')->orderBy('id','desc')->get();
    }
}
