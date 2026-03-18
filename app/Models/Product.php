<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'category_id',
        'name',
        'sku',
        'description',
        'price',
        'discount_price',
        'image',
        'stock',
        'status',

    ];
    //Relation with Category:
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    //Relation with Cart
    public function carts()
{
    return $this->hasMany(Cart::class);
}
}
