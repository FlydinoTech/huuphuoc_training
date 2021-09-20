<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'description',  
        'picture',
    ];

    public function getPictureUrlAttribute()
    {
        return $this->picture ? Storage::url('/images/category_product/' . $this->picture) : '';
    }

    public function getSlugCategoryAttribute()
    {
        return $this->name ? Str::slug($this->name) : '';
    }
}
