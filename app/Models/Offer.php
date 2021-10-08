<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Offer extends Model
{
    use  HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */


    protected $fillable = [
        
        'title',
        'start_date',
        'end_date',
        'discount_type',
        'discount',

    ];
    
    
    public function product()
    {
        return $this->belongTo(product::class);
    }


 }