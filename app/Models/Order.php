<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    use HasFactory;

    protected $fillable = [
        'id_user',
        'status',
        'precio_total',
        'notas'
    ];
     
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'id_user');
    }

    public function ordersproduct()
    {
        return $this->belongsTo(OrdersProduct::class,'id_order');
    }


}
