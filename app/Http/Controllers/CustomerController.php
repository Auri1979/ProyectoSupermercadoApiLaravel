<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){

        $customer = Customer::all();

        return $customer;

    }

    public function show($id){

        $customer  = Customer::find($id);

        if(!$customer) {

            return ['error' => 'Cliente no encontrado'];
        }

        return $customer;
    }

    public function store(Request $request){

        $datos_validados = $request->validate([
        
            'name' => 'required|min:3',

            'lastname' => 'required|min:4',

            'address' => 'required|min:4',

            'telephone' => 'required|min:9|max:9',

        ]);

         //crear

        $customer = Customer::create($datos_validados);


        return [
            'customer' => $customer,
            'mensaje' => 'Cliente creado'
        ];

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

        $customer = Customer::find($id);

        //comprobar user que existe

        if($customer ){

          return ['error' => 'Cliente no encontrado'];

        }
      //Actualizar user

        $customer->update($datos_validados);

        return [
            'customer' => $customer,
            'mensaje' => 'Cliente actualizado'
        ];
 
    }
}
  