<?php

namespace App\Http\Controllers;

use App\Models\OfferProduct;
use Illuminate\Http\Request;

class OfferProductController extends Controller
{
    
    public function index(){
    
        $offerproduct = OfferProduct::all();   
 
         return $offerproduct;
 
    }
 
    public function show($id){
 
         $offerproduct = OfferProduct::find($id);
 
         //comprobar que existe offer
 
         if(!$offerproduct){
 
           return ['error' => 'OfferProduct no encontrado'];
 
        }
 
 
         return  $offerproduct;
    }
           
       
    public function store(Request $request){

        $datos_validados = $request->validate([
        
          'id_offer' => 'min:1',
          'id_product' => 'min:1',

   ]);

         //crear

        OfferProduct::create($datos_validados);

        return ['mensaje' => 'offerproduct creado'];

   }
       



    public function update($id, Request $request){
 
         //validar los datos
 
         $datos_validados = $request->validate([
              
          'id_offer' => 'min:1',
          'id_product' => 'min:1',

            ]);
 
         //buscar offer id
 
         $offerproduct = OfferProduct::find($id);
 
         //comprobar que existe offer
 
         if(!$offerproduct){
 
           return ['error' => 'OfferProduct no encontrado'];
 
         }
       //Actualizar offer
 
         $offerproduct->update($datos_validados);
 
         return ['mensaje' => 'OfferProduct actualizado'];
         }
            
         
    public function destroy($id) {

      //buscar offer id

      $offerproduct = OfferProduct::find($id);

      //comprobar que existe offer

      if(!$offerproduct){

        return ['error' => 'offerproduct no encontrado'];

      }
    //Actualizar offer

      $offerproduct->destroy($id);

      return ['mensaje' => 'offerproduct borrado'];
  }




}
