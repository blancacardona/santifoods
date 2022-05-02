<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Support\Facades\File;

class AdminRecipeController extends Controller
{
    public function __construct() {

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('haveaccess','recipe.index');

        $nombre = $request->get('nombre');
        $recetas = Recipe::with('images','category')->where('nombre','like',"%$nombre%")->orderBy('nombre')->paginate(2);
        return view('admin.recipe.index',compact('recetas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('haveaccess','recipe.create');

        $categorias = Category::orderBy('nombre')->get();
        return view('admin.recipe.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('haveaccess','recipe.create');

        $request->validate([
            'nombre' => 'required|unique:recipes,nombre',
            'slug' => 'required|unique:recipes,slug',
            'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        
        $urlimagenes = [];

        if ($request->hasFile('imagenes')) {

            $imagenes = $request->file('imagenes');

            foreach ($imagenes as $imagen) {

                $nombre = time().'_'.$imagen->getClientOriginalName();

                $ruta = public_path().'/imagenes';
                
                $imagen->move($ruta , $nombre);

                $urlimagenes[]['url'] = '/imagenes/'.$nombre;
            }
        }
        $rec = new Recipe;

        $rec->nombre=                  $request->nombre;
        $rec->slug=                    $request->slug;
        $rec->category_id=             $request->category_id;
        $rec->descripcion=             $request->descripcion;
        $rec->tiempo=                  $request->tiempo;
        $rec->raciones=                $request->raciones;
        $rec->ingredientes=            $request->ingredientes;
        $rec->elaboracion=             $request->elaboracion;



        // if ($request->activo) {
        //     $rec->activo= 'Si';    
        // }
        // else {
        //     $rec->activo= 'No';    
        // }



        if ($request->principal) {
            $rec->principal= 'Si';    
        }
        else {
            $rec->principal= 'No';    
        }

    
        $rec->save();


        $rec->images()->createMany($urlimagenes);

        return redirect()->route('admin.recipe.index')->with('datos','Registro creado correctamente!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $this->authorize('haveaccess','recipe.show');

        $receta = Recipe::with('images','category')->where('slug',$slug)->firstOrFail();
        $categorias = Category::orderBy('nombre')->get();
        return view('admin.recipe.show',compact('receta','categorias'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $this->authorize('haveaccess','recipe.edit');
    
        $receta = Recipe::with('images','category')->where('slug',$slug)->firstOrFail();
        $categorias = Category::orderBy('nombre')->get();
        return view('admin.recipe.edit',compact('receta','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('haveaccess','recipe.edit');

        $request->validate([
            'nombre' => 'required|unique:recipes,nombre,'.$id,
            'slug' => 'required|unique:recipes,slug,'.$id,
            'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        
        $urlimagenes = [];

        if ($request->hasFile('imagenes')) {

            $imagenes = $request->file('imagenes');

            foreach ($imagenes as $imagen) {

                $nombre = time().'_'.$imagen->getClientOriginalName();

                $ruta = public_path().'/imagenes';
                
                $imagen->move($ruta , $nombre);

                $urlimagenes[]['url'] = '/imagenes/'.$nombre;
            }
        }
        $rec = Recipe::findOrFail($id);

        $rec->nombre=                  $request->nombre;
        $rec->slug=                    $request->slug;
        $rec->category_id=             $request->category_id;
        $rec->descripcion=             $request->descripcion;
        $rec->tiempo=                  $request->tiempo;
        $rec->raciones=                $request->raciones;
        $rec->ingredientes=            $request->ingredientes;
        $rec->elaboracion=             $request->elaboracion;

        

        // if ($request->activo) {
        //     $prod->activo= 'Si';    
        // }
        // else {
        //     $prod->activo= 'No';    
        // }



        if ($request->principal) {
            $rec->principal= 'Si';    
        }
        else {
            $rec->principal= 'No';    
        }

    
        $rec->save();


        $rec->images()->createMany($urlimagenes);

        return redirect()->route('admin.recipe.edit',$rec->slug)->with('datos','Registro actualizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('haveaccess','recipe.destroy');

        $rec= Recipe::with('images')->findOrFail($id);
        foreach($rec->images as $image) {
            
            $archivo = substr($image->url,1);

             File::delete($archivo);
    
            $image->delete();
        }

        $rec->delete();
        return redirect()->route('admin.recipe.index')->with('datos','Registro eliminado correctamente!');
    }
}
