<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
    
        $product = Product::all();   
 
         return $product;
 
    }

    public function productosoferta(){  

        $sql = 'SELECT  CODE , NAME , price , weight, title
                FROM products, offer_product, offers 
                WHERE products.id = offer_product.id_product AND offer_product.id = offers.id;';

        $products = DB::select($sql);
    
      return [
           'data' => $products,
           'status' => 200
      ];     
    }

    public function getcategorias(){  

      $sql = 'SELECT NAME, price, category_name
              FROM products, categories
              WHERE products.id_category = categories.id
              order BY category_name;';

      $products = DB::select($sql);
  
      return [
          'data' => $products,
          'status' => 200
      ];     
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

        $producto = Product::create($datos_validados);

        return [
          'producto' => $producto,
          'mensaje' => 'Product create'
        ];
  }

    public function update($id, Request $request){
  
    //validar product

    
      $datos_validados = $request->validate([
     
        'code'=> 'required|min:3',

        'name' => 'required|min:3',

        'price' => 'required|min:3',

        'weight' => 'required|min:1',

        'description' => 'required|min:3',

        'image'=> 'required|mimes:jpeg,png,jpg,gif,svg|max:4000,dimensions:min_width=640,min_height=480,max_width=640,max_height=480', 

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

        return [
          'producto' => $product,
          'mensaje' => 'product actualizado'
        ];
 
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
       

        

  
