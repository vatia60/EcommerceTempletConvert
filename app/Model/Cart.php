<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'order_id', 'product_id', 'quantity','price'
    ];
}
