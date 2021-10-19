<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){
    
      $order = Order::all();   

      return $order;
    }
    public function getpedidos($id){

      $consulta1 = Order::with('user')
                        ->where('id','=', $id)
                        ->get();
      return [
           'data' => $consulta1,
           'status' => 200
                      ];     
    }

    public function store(Request $request) {
      // Validar
      $datos_validados = $request->validate([
        'precio_total' => 'required'
      ]);

      $precio = $request->only(['precio_total']);

      $order = Order::create([
        'id_user' => Auth::user()->id,
        'precio_total' => $precio['precio_total'],
        'notas' => 'Test'
      ]);

      $productos = $request->only(['productos']);

      //return $productos;
      
      foreach($productos as $producto) {
        $order->products()->attach($producto['productos'][0], ['quantity' => $producto['productos'][1]]);
      }

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

  
    // public  function destroy($id){
    
    //     return "borrar order";
    
    // }
}


    