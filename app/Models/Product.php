<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'user_id',
        'name',
        'price',
        'stock',
        'description',
        'details',
        'image',
        'coupons'
    ];
    public $timestamps = false;
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function carts(){
        return $this->belongsToMany(Carts::class,'products_id');
    }
}
