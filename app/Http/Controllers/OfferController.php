<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{
    
    public function index(){
    
        $offer = Offer::all();   
 
         return $offer;
 
    }
 
    public function show($id){
 
         $offer = Offer::find($id);
 
         //comprobar que existe offer
 
         if(!$offer){
 
           return ['error' => 'Offer no encontrado'];
 
        }
 
 
         return  $offer;
    }
           
       
    public function store(Request $request){

        $datos_validados = $request->validate([ 
          'title' => 'min:1',
          'start_date' =>'date',
          'end_date' =>'date',
          'discount_type' => 'min:1',
          'discount' => 'min:1',
      ]);

         //crear

      $oferta = Offer::create($datos_validados);

      return [
        'oferta' => $oferta,
        'mensaje' => 'oferta creado'
      ];

   }
       



    public function update($id, Request $request){
 
         //validar los datos
 
         $datos_validados = $request->validate([
              
            'title' => 'min:1',
            'start_date' =>'date',
            'end_date' =>'date',
            'discount_type' => 'min:1',
            'discount' => 'min:1',
            ]);
 
         //buscar offer id
 
         $offer = Offer::find($id);
 
         //comprobar que existe offer
 
         if(!$offer){
 
           return ['error' => 'Offer no encontrado'];
 
         }
       //Actualizar offer
 
         $offer->update($datos_validados);
 
         return [
          'oferta' => $offer,
           'mensaje' => 'Offer actualizado'
          ];
    }
            
         
    public function destroy($id) {

      //buscar offer id

      $offer = Offer::find($id);

      //comprobar que existe offer

      if(!$offer){

        return ['error' => 'offer no encontrado'];

      }
    //Actualizar offer

      $offer->destroy($id);

      return ['mensaje' => 'offer borrado'];
  }




    }


   
