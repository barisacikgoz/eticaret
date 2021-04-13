<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    public function wishlist(){
        return $this->belongsTo(Basket::class, 'id', 'wishlist_id');
    }
}
