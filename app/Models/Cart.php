<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','products_id','quantity'];
    public $timestamps = false;

    public function products(){
        $this->belongsToMany(Products::class, 'cart_product', 'cart_id', 'product_id');
    }
    public function user(){
        $this->belongsTo(User::class,'user_id');
    }
}
