<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getProduct(){
        return $this->belongsTo(Product::class,"id", "product_id");
    }

    public function orderProducts(){
        return $this->hasMany(OrderProduct::class, 'order_id', 'id');
    }
}
