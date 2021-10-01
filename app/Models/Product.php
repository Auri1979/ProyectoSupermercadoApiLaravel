<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

     
    public function offer_product()
    {
        return $this->hasOne(Product_offer::class);
    }
    
    public function order()
    {
        return $this->belongsToMany(Order::class);
    }

    
}
