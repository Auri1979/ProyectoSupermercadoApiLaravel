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

        return $user;
    }

    public function store(Request $request){

        $datos_validados = $request->validate([
        
            'name' => 'required|min:3',

            'lastname' => 'required|min:4',

            'address' => 'required|min:4',

            'telephone' => 'required|min:9|max:9',

   ]);

         //crear

        User::create($datos_validados);

        return ['mensaje' => 'User creado'];

   }
      
    public function update($id, Request $request){
  
             //validar los user

        $datos_validados = $request->validate([
  
            'name' => 'required|min:3',

            'lastname' => 'required|min:4',

            'address' => 'required|min:4',

            'telephone' => 'required|min:9|max:9',
 
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

}
  