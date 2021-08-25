<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    public function getPictureUrlAttribute()
    {
        return $this->picture ? url('/storage/files'). '/' . $this->picture : '';
    }
}
