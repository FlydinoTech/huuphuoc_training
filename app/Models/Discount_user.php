<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Discount_user extends Model
{
    use HasFactory;
    public function getItem()
    {
        return DB::table('discount_users')->get();
    }
}
