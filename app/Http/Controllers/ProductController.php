<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
    
        return "mostrar product";

    }

    public function show($id){

        return "mostrar uno";
    }
    
    public function create(){

       return "crear product";

    }
      
    public function update($id){

        return "modificar product";

    }

    public  function destroy($id){

        return "borrar product";

    }


    
    public function store(Request $request){

        $datos_validados = $request->validate([

          'product' => 'required',

   ]);

}
  }

