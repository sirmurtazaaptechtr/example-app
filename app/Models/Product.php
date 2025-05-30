<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name', 'category_id', 'price', 'unit', 'description', 'is_available'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
