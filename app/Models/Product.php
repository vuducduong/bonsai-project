<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
            'name',
            'type',
            'image',
            'status',
            'intro',
            'feature',
            'meaning',
            'usage',
            'function',
            'stock',
            'product_line_id',
    ];

    public function order_details(){
        return $this->hasMany(OrderDetail::class);
    }
    public function product_lines(){
        return $this->belongsTo(ProductLine::class);
    }

}
