<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
    
        return "mostrar order";

    }

    public function show($id){

        return "mostrar uno";
    }
    
    public function create(){

       return "crear order";

    }
      
    public function update($id){

        return "modificar order";

    }

    public  function destroy($id){

        return "borrar order";

    }


    
    public function store(Request $request){

        $datos_validados = $request->validate([

          'order' => 'required',

   ]);

}
  }

