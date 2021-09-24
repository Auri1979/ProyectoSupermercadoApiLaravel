<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;

class SupermercadoController extends Controller
{
       public function Index(){
       
        $user = User::all();

        return $user;

      }


      /*  public function Order(){
       
        $order = Order::all();

        return $order;

      }

      public function Product(){
       
        $product = Product::all();

        return $product;

      }
    
      public function Category(){
       
        $category = Category::all();

        return $category;

      } */


      public function store(Request $request){

        $datos_validados = $request->validate([

          'index' => 'required',

          'order' => 'required',

          'product' => 'required',

          'category' => 'required',

   ]);
     
          }
   }

     
     

