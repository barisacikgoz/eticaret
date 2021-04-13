<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getCustomer(){
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
}
