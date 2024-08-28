<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['category'];
    public $timestamps = false;

    public function products(){
        $this->hasManyc(Products::class,'category_id');
    }
}
