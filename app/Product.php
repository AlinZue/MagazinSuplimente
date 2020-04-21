<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category',
        'brand',
        'name',
        'description',
        'photo',
        'quantity',
        'size',
        'composition',
        'price'
    ];
}
