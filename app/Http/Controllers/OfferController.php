<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfferController extends Controller
{
    
    public function index(){
    
        return "mostrar offer";

    }

    public function show($id){

        return "mostrar uno";
    }
    
    public function create(){

       return "crear offer";

    }
      
    public function update($id){

        return "modificar offer";

    }

    public  function destroy($id){

        return "borrar offer";

    }


    
    public function store(Request $request){

        $datos_validados = $request->validate([

          'offer' => 'required',

   ]);

}
  }
