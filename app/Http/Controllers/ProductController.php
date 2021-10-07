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

     public function store(Request $request){

        $datos_validados = $request->validate([

          'code'=> 'required|min:1',

          'name' => 'required|min:1',

          'price' => 'required|min:1',

          'weight' => 'required|min:1',

          'description' => 'required|min:1',

          'image'=> 'required|mimes:jpeg,png,jpg,gif,svg|max:4000,dimensions:min_width=640,min_height=480,max_width=640,max_height=480', 

          'id_category' => 'required|min:1',

          'stock'=> 'required|min:1',

   ]);
    
        //crear

        Product::create($datos_validados);

        return ['mensaje' => 'Product create'];

   


  }

   public function update($id, Request $request){
  
    //validar product

    
      $datos_validados = $request->validate([

          'code' => 'required|min:1',

          'name' => 'required|min:1',

          'price' => 'required|min:1',

          'weight' => 'required|min:1',

          'description' => 'required|min:1',

          //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048,dimensions:min_width=640,min_height=480,max_width=640,max_height=480',  

          'id_category' => 'required|min:1',

          'stock'=> 'required|min:1',              
        ]);

      
         //buscar Product id

        $product = Product::find($id);

        //comprobar product que existe

        if(!$product){

          return ['error' => 'Product no encontrado'];

        }
      //Actualizar product

        $product->update($datos_validados);

        return ['mensaje' => 'product actualizado'];
 
    }
      
    public function destroy($id) {

      //buscar product id

      $product = Product::find($id);

      //comprobar que existe product

      if(!$product){

        return ['error' => 'Product no encontrado'];

      }
    //Actualizar product

      $product->destroy($id);

      return ['mensaje' => 'Product borrado'];
  }

}
       

        

  