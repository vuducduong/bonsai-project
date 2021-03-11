<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
            'orderDate',
            'amount',
            'totalPrice',
            'user_id'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function order_details(){
        return $this->hasMany(OrderDetail::class);
    }
}
