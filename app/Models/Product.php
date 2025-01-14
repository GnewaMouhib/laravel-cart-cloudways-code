<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Allow mass assignment for the following fields
    protected $fillable = [
        'name', 
        'details', 
        'description', 
        'brand', 
        'price', 
        'shipping_cost', 
        'image_path'
    ];
}
