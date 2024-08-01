<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class,'user');
    }
    protected $fillable = [
        'category',
        'user',
        'name',
        'price',
        'stock',
        'description',
        'image',
    ];
}
