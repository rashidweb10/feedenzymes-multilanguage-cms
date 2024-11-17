<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'image',
        'category_id',
        'variation',
        'is_active'
    ];

    // Define the relationship with the ProductCategory model
    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }    
}