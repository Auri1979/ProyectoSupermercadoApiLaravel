<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
    
       $order = Order::all();   

        return $order;

    }

    public function show($id){

        $order = Order::find($id);

        //comprobar que existe order

        if(!$order){

          return ['error' => 'Order no encontrado'];

        }


        return  $order;
    }
    
    // public function create(){

    //    return "crear order";

    // }
      
    public function update($id, Request $request){

        //validar los datos

        $datos_validados = $request->validate([

            'id_user' => 'min:3',
 
            'description' => 'min:4',

            'status' => 'min:4',

            'total' => 'min:3', 
 
     ]);

        //buscar order id

        $order = Order::find($id);

        //comprobar que existe order

        if(!$order){

          return ['error' => 'Order no encontrado'];

        }
      //Actualizar order

        $order->update($datos_validados);

        return ['mensaje' => 'Order actualizado'];
    }


        

    }

    // public  function destroy($id){

    //     return "borrar order";

    // }


    
//     public function store(Request $request){

//         $datos_validados = $request->validate([

//           'order' => 'required',

//    ]);


  

