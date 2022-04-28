<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Category;
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
        $nombre = $request->get('nombre');
       
        $recetas = Recipe::where('nombre','like',"%$nombre%")->orderBy('nombre')->paginate(2);
        return view('admin.recipe.index',compact('recetas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados_recetas = $this->estados_recetas();
        $categorias = Category::orderBy('nombre')->get();
        return view('admin.recipe.create',compact('categorias','estados_recetas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $rec->cantidad=                $request->cantidad;
        $rec->precio_anterior=         $request->precioanterior;
        $rec->precio_actual=           $request->precioactual;
        $rec->porcentaje_descuento=    $request->porcentajededescuento;
        $rec->descripcion_corta=       $request->descripcion_corta;
        $rec->descripcion_larga=       $request->descripcion_larga;
        $rec->especificaciones=        $request->especificaciones;
        $rec->datos_de_interes=        $request->datos_de_interes;
        $rec->estado=                  $request->estado;


        if ($request->activo) {
            $rec->activo= 'Si';    
        }
        else {
            $rec->activo= 'No';    
        }



        if ($request->sliderprincipal) {
            $rec->sliderprincipal= 'Si';    
        }
        else {
            $rec->sliderprincipal= 'No';    
        }

    
        $rec->save();


        $rec->images()->createMany($urlimagenes);

        //return $rec->images;

        return redirect()->route('admin.recipe.index')->with('datos','Registro creado correctamente!');

        
 
        //return $request->all();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
