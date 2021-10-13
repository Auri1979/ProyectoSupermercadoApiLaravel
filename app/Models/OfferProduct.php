<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'id_offer',
        'id_product',

    ];

    public function product()
    {
        return $this->belongTo(product::class);
    }


}
