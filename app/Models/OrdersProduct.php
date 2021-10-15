<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersProduct extends Model
{
   use HasFactory;


    protected $fillable = [
        
       'order_id',

        'product_id',

        'description',

        'quantity',

    ];

    public function product()
    {
       return $this->belongsToMany(Product::class);
   }

    public function order()
    {
       return $this->belongsTo(OrdersPrduct::class,'id_Orderss'); 
    }


}
