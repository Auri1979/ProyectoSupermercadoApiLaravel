<?php

namespace App\Http\Controllers;

use App\Models\OrdersProduct;
use Illuminate\Http\Request;

class OrdersProductController extends Controller
{
    public function index(){
    
        $ordersproduct = OrdersProduct::all();   
 
         return $ordersproduct;
 
     }
 
     public function show($id){
 
         $ordersproduct = OrdersProduct::find($id);
 
         //comprobar que existe order
 
         if(!$ordersproduct){
 
           return ['error' => 'OrderProduct no encontrado'];
 
         }
 
 
         return  $ordersproduct;
     }
       
     public function store(Request $request){

      $datos_validados = $request->validate([
      
        'order_id' => 'min:1',

        'product_id' => 'min:1',

        'description' => 'min:1',

        'quantity' => 'min:1',

 ]);

       //crear

      OrdersProduct::create($datos_validados);

      return ['mensaje' => 'OrdersProduct creado'];

 }
         
           
       public function update($id, Request $request){
 
         //validar los datos
 
         $datos_validados = $request->validate([
 
            'order_id' => 'min:1',

            'product_id' => 'min:1',
  
            'description' => 'min:1',
 
            'quantity' => 'min:1',
 
             
  
      ]);
 
         //buscar orderproduct id
 
         $ordersproduct = OrdersProduct::find($id);
 
         //comprobar que existe order
 
         if(!$ordersproduct){
 
           return ['error' => 'OrdersProduct no encontrado'];
 
         }
       //Actualizar ordersproduct
 
         $ordersproduct->update($datos_validados);
 
         return ['mensaje' => 'OrdersProduct actualizado'];
     }
         
     public function destroy($id) {

      //buscar offer id

      $ordersproduct = OrdersProduct::find($id);

      //comprobar que existe ordersproduct

      if(!$ordersproduct){

        return ['error' => 'ordersproduct no encontrado'];

      }
    //Actualizar offer

      $ordersproduct->destroy($id);

      return ['mensaje' => 'ordersproduct borrado'];
  }
    
            
    
      }
            
     
   
 