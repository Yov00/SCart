<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    protected $guard = [];

    function products()
    {
        return $this->hasMany(Product::class);
    }   
}
