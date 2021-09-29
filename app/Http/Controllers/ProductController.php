<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
    
        $product = Product::all();   
 
         return $product;
 
     }
 
     public function show($id){
 
         $product = Product::find($id);
 
         //comprobar que existe Product
 
         if(!$product){
 
           return ['error' => 'Product no encontrado'];
 
         }
 
 
         return  $product;
     }
  }

