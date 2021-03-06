<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Category;

class Product extends Model
{
    protected $fillable = [
        'title', 'slug', 'image', 'description', 'price', 'sale_price', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
