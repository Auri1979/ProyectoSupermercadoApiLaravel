<?php

namespace App\Http\Controllers;
use App\Models\ProductCategory;
use Illuminate\Http\Request;


class ProductCategoryController extends Controller
{
    public function index(){

        $productcategory = ProductCategory::all();
    
        return $productcategory;

    }

    public function show($id){

            $productcategory = ProductCategory::find($id);
    
            //comprobar que existe ProductCategory
    
            if(!$productcategory){
    
              return ['error' => 'Productcategory no encontrado'];
    
            }

            return "mostrar uno";
    }
    

      public function store(Request $request){

        $datos_validados = $request->validate([

          'productcategory' => 'required',

   ]);

}
  }

