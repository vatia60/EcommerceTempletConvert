<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Category extends Model
{
    protected $fillable = [
        'name', 'slug', 'image'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
