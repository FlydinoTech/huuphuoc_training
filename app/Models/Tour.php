<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Tour extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'category_id',
        'description', 
        'day', 
        'night', 
        'price', 
        'discount', 
        'picture',
    ];

    public function getPictureUrlAttribute()
    {
        return $this->picture ? Storage::url('/images/tour/' . $this->picture) : '';
    }

    public function category()
    { 
        return $this->belongsTo(Category::class);
    }
}
