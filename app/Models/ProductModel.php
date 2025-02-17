<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'product_items';
    protected $fillable = ['name', 'description', 'price'];
}
