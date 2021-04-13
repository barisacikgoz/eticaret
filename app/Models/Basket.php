<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Basket
 *
 * @property int $id
 * @property string $image
 * @property string $name
 * @property string $price
 * @property string $quantity
 * @property string $total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Basket newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Basket newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Basket query()
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Basket extends Model
{
    use HasFactory;

    protected $appends = ["totalPrice"];

    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    public function wishlist(){
        return $this->belongsTo(Wishlist::class, 'wishlist_id', 'id');
    }

    public function getTotalPriceAttribute()
    {
        return $this->product->price * $this->quantity;
    }
}
