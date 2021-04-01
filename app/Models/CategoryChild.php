<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryChild extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_parent_id',
    ];

    public function category_parents(){
        return $this->belongsTo(CategoryParent::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
