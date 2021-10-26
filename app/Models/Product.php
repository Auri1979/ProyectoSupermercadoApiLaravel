<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Foundation\Auth\Product as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Product extends Model
{
    use HasFactory;

    //use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        
        'code',
        'name',
        'price',
        'weight',
        'description',
        'image',
        'id_category',
        'stock', 

    ];

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
