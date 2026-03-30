<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    protected $fillable = [
        'name',
        'brand',
        'processor',
        'ram_gb',
        'storage_gb',
        'price',
        'stock',
        'description',
    ];
}
