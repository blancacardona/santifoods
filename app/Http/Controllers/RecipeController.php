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
    public function index(Request $request)
    {


        // $recipe= Recipes::
        // select('recipes.id','recipes.nombre', 'recipes.slug', 'recipes.descripcion', 'recipes.tiempo', 'recipes.raciones','recipes.ingredientes', 'recipes.elaboracion', 'categorias.categoria' )
        // ->join('categorias', 'categorias.id','=', 'recipes.categoria')->paginate(8);

        // return view('recipes.index', ['recipe' => $recipe]);


        // $categorias = Category::all(); 
        // $recetas = Recipe::all()->where('category_id',$recetas->categorias->id )->paginate(10);
        // return view('recipe.index',compact('recetas','categorias'));

        $nombre = $request->get('nombre');
        $recetas = Recipe::with('images','category')->where('nombre','like',"%$nombre%")->orderBy('nombre')->paginate(10);
        $categorias = Category::orderBy('nombre')->get();
        return view('recipe.index',compact('recetas', 'categorias'));
  
    }

    public function show($slug)
    {

        $receta = Recipe::where('category_id',$categoria)->firstOrFail();
        $categoria = Category::orderBy('nombre')->get();
        return view('recipe.show',compact('receta','categoria'));
        
    }


   

}
