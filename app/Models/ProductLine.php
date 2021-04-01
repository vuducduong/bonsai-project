<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function prouducts(){
        return $this->hasMany(Product::class);
    }

}
