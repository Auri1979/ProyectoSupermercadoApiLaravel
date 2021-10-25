<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $category = Category::all();
    
        return $category;

    }

    public function show($id){

      $category = Category::find($id);

      //comprobar que existe Category

      if(!$category){

        return ['error' => 'Categoria no encontrada'];

      }

      return $category;
    }   

}

