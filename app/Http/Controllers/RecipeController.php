<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Category;

class RecipeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $categoria = Category::all(); 
        $recetas = Recipe::all()->where('categoria',$categoria->slug )->paginate(10);
        return view('recipe.index',compact('recetas','categoria'));
  
    }

    public function show($slug)
    {

        $receta = Recipe::where('slug',$slug)->firstOrFail();
        $categoria = Category::orderBy('nombre')->get();
        return view('recipe.show',compact('receta','categoria'));
        
    }


   

}
