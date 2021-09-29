<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offers extends Model
{

    use HasFactory;

    public function product()
    {
        return $this->belongTo(product::class);
    }
    
    
}
