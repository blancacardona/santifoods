<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SaveProductoRequest;
use App\Models\Recetas;
use App\Models\Categorias;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RecetasController extends Controller
{
    public function index(Request $request){ 
        if($request){
            $query = trim($request->get('search'));
            $recetas = Recetas::where('name','LIKE','%'. $query.'%')
            ->orderBy('id','asc')
            ->simplePaginate(5);
            return view('receta.index',['recetas' => $recetas , 'search' => $query]);
        }
    }

    public function create(){
        $categorias = Categorias::orderBy('id' , 'desc')->pluck('name', 'id');
        return view('receta.create', compact('categorias'));
    }

    public function store(SaveProductoRequest $request){

        $receta = new Recetas();
            
        $receta->categoria_id  = $request->get('categoria_id');
        $receta->name          = request('name');
        $receta->slug          = Str::slug($request->get('name'));
        $receta->ingredientes  = request('ingredientes');
        $receta->elaboracion  = request('elaboracion');
        $receta->extract       = request('extract');
        $receta->sunrise         = request('sunrise');
            // if($request->hasFile('image')){
            //     $file = $request->image;
            //     $file->move(public_path(). '/img/productos', $file->getClientOriginalName());
            //     $producto->image = $file->getClientOriginalName();
    //     $producto->visible       = request('visible') ? 1 : 0;
    // }
        $receta->save();
        return redirect('receta/');
    } 
    public function edit($id)
    {
        return view('receta.edit',['receta' => Recetas::findOrFail($id)]);
    } 

    public function update(Request $request,$id)
    {
        $receta = Recetas::findOrFail($id);

        $receta->categoria_id  = auth()->id();
        $receta->name          = $request->get('name');
        $receta->slug          = Str::slug($request->get('name'));
        $receta->ingredientes  = $request->get('ingredientes');
        $receta->elaboracion  = $request->get('elaboracion');
        $receta->extract       = $request->get('extract');
        $receta->sunrise         = $request->get('sunrise');
            // if($request->hasFile('image')){
            //     $file = $request->image;
            //     $file->move(public_path(). '/img/productos', $file->getClientOriginalName());
            //     $producto->image = $file->getClientOriginalName();
            // }
        $receta->visible       = $request->get('visible') ? 1 : 0;
        $receta->update(); 
        return redirect('receta/');
    }
    public function destroy($id){
        $receta = Recetas::find($id);
        unlink(public_path('img/productos/'.$receta->image));
        $receta->delete();
        return redirect('receta/');
    }
}