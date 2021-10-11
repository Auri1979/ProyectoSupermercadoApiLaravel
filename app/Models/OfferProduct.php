<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferProduct extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongTo(product::class);
    }
    
   

    protected $fillable = [
        
        'id_offer',
        'id_product',

    ];


}
