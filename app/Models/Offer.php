<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offers extends Model
{
    public function product()
    {
        return $this->belongTo(product::class);
    }
    
    
}
