<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){

     $user = User::all();

    
        return $user;

    }

    public function show($id){

        $user = User::find($id);

        if(!$user){

            return ['error' => '$user no encontrado'];
        }

        return "mostrar user";
    }

    public function store(Request $request){

        $datos_validados = $request->validate([
        
            'name' => 'required|min:3',

            'lastname' => 'required|min:4',

            'address' => 'required|min:4',

            'telephone' => 'required|min:9|max:9',
 
            'email' => 'required|email',

            'email_verified_at' => 'required|email',

            'password' => 'min:8',

   ]);

         //crear

            User::create($datos_validados);

       return ['mensaje' => 'User creado'];

   }

    
    // public function create(){

    //    $user = User::create();

    //    return "crear user";

    // }
      
    public function update($id, Request $request){
  
             //validar los user

        $datos_validados = $request->validate([

            'name' => 'min:3',

            'lastname' => 'min:4',

            'address' => 'min:4',

            'telephone' => 'min:8',
 
            'email' => 'min:8',

            'email_verified_at' => 'min:8',

            'password' => 'min:8',

            
 
     ]);

        //buscar user id

        $user = User::find($id);

        //comprobar user que existe

        if(!$user){

          return ['error' => 'User no encontrado'];

        }
      //Actualizar user

        $user->update($datos_validados);

        return ['mensaje' => 'User actualizado'];
      
      

    }

    public  function destroy($id){

        return "borrar user";

    }


    
//     public function store(Request $request){

//         $datos_validados = $request->validate([

//           'index' => 'required',

//    ]);

}
  