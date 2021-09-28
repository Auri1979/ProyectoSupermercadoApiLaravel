<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    
        return "mostrar usuario";

    }
  
    public function show($id){
        
       /*  $user=User::find($id);
  
        if(!$user){
 
            return response()->json([‘No existe’,404]);
 
        }
 
        return response()->json($user,200); */
        return "mostrar uno";
    }
    
    public function create(){

       return "crear usuario";

    }
      
    public function update($id){

        return "modificar usuario";

    }

    public  function destroy($id){

        return "borrar usuario";

    }


    
    public function store(Request $request){

        $datos_validados = $request->validate([

          'index' => 'required',

   ]);

}
  }