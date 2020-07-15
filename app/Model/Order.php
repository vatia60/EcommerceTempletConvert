<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Cart;

class Order extends Model
{

    protected $fillable = [
        'user_id', 'customer_name', 'customer_phone','total_amount', 'paid_amount', 'order_id', 'product_id'
    ];

    public function products()
    {
        return $this->hasMany(Cart::class);
    }
}
