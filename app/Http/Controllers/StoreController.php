<?php

namespace App\Http\Controllers;

use App\Models\Recetas;
use App\Models\Categorias;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        $categorias = Categorias::all();
        $recetas = Recetas::all();
                
        return view('categorias', compact('categorias' , 'recetas'));
        
    }

    public function show($slug){
        
        $receta = Recetas::where('slug', $slug)->first();
        return view('product-details', compact('receta'));

        
    }
    public function searchCategory($slug){
        $categorias = Categorias::where('slug' , $slug)->pluck('id')->all();
        $recetas = Recetas::where('categoria_id',$categorias)
                    ->orderBY('id', 'DESC')
                    ->simplePaginate(6);
        return view('recetas', compact('categorias' , 'recetas')); 
    }
}