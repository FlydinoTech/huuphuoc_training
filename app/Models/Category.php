<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'description',  
        'picture',
    ];

    public function getPictureUrlAttribute()
    {
        return $this->picture ? Storage::url('/images/category/' . $this->picture) : '';
    }
}
