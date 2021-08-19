<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tours extends Model
{
    use HasFactory;
    protected $table = 'tours';
    protected $primaryKey = 'id';
    public function getItem(){
        return DB::table('tours')->orderBy('id','desc')->get();
    }
}
