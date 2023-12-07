<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [

        'name',
        'quantity',
        'old_price',
        'regular_price',
        'image',
        'is_active',

    ];
}
