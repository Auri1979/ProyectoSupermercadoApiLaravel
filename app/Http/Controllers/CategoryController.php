<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index(){
    
        return "mostrar category";

    }

    public function show($id){

        return "mostrar uno";
    }
    
    public function create(){

       return "crear category";

    }
      
    public function update($id){

        return "modificar category";

    }

    public  function destroy($id){

        return "borrar category";

    }


    
    public function store(Request $request){

        $datos_validados = $request->validate([

          'category' => 'required',

   ]);

}
  }

