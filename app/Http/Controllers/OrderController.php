<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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
        'precio_total' => 'required',
        'productos' => 'required'
      ]);


      $order = Order::create([
        'user_id' => Auth::user()->id,
        'precio_total' => $request->input('precio_total'),
      ]);

      if ($request->exists('notas')) {
        $order->update(['notas' => $request->input('notas')]);
      }

      foreach($request->input('productos') as $producto) {
        $test = $order->products()->attach($order->id,['product_id'=> $producto['id'], 'quantity' => $producto['quantity']]);
      }
 
      return response()->json([
        'order' => $order,
        'productos' => $order->products
      ]);

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

            'user_id' => 'min:3',
 
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



  

