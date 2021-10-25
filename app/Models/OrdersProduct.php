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

    public function products()
    {
       return $this->belongsToMany(Products::class,'Product_id');
     }

    public function orders()
    {
       return $this->belongsTo(Orders::class,'Order_id'); 
     }

     
    public function ordersproducts()
    {
       return $this->belongsTo(OrdersPrducts::class, 'Order_id', 'Product_id'); 
     }
}
