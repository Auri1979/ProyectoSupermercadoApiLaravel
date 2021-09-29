<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongTo(category::class);
    }

     
    public function offer_product()
    {
        return $this->hasOne(products_offer::class);
    }
    
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    
}
