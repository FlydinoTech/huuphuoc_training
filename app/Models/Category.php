<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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

    public function getSlugCategoryAttribute()
    {
        return $this->name ? Str::slug($this->name) : '';
    }

    public function searchItem($data){
        return Category::where('name', 'LIKE', '%' . $data . '%')
            ->orWhere ('description', 'LIKE', '%' . $data . '%')
            ->get();
    }
}
