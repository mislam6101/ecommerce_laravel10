<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_number',
        'name',
        'address',
        'email',
        'phone',
        'subtotal',
        'discount',
        'shipping',
        'total',
        'payment_method',
        'payment_status',
        'status',
    ];

    // 🔥 One Order → Many Items
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}