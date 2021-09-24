<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;

class SupermercadoController extends Controller
{
      public function index(){
       
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

     
}
