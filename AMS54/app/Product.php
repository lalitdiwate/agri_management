<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'name', 'user_id', 'slug','image','category','desc',
    ];



    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }
}
