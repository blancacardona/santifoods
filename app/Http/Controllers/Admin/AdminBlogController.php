<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Image;
use Illuminate\Support\Facades\File;

class AdminBlogController extends Controller
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
        $this->authorize('haveaccess','blog.index');
        $nombre = $request->get('nombre');

        $blogs = Blog::with('images')->orderBy('nombre')->paginate(15);
        return view('admin.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('haveaccess','blog.create');

        $blogs = Blog::orderBy('nombre')->get();
        return view('admin.blog.create',compact('blogs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('haveaccess','blog.create');

        $request->validate([
            'nombre' => 'required|unique:blogs,nombre',
            'slug' => 'required|unique:blogs,slug',
            'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20480'

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
        $blog = new Blog;

        $blog->nombre=                  $request->nombre;
        $blog->slug=                    $request->slug;
        $blog->descripcion=             $request->descripcion;
        



        // if ($request->activo) {
        //     $blog->activo= 'Si';    
        // }
        // else {
        //     $blog->activo= 'No';    
        // }


    
        $blog->save();


        $blog->images()->createMany($urlimagenes);

        return redirect()->route('admin.blog.index')->with('datos','Registro creado correctamente!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $this->authorize('haveaccess','blog.show');

        $blog = Blog::with('images')->where('slug',$slug)->firstOrFail();
        $editar = 'Si';
        return view('admin.blog.show',compact('blog','editar'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $this->authorize('haveaccess','blog.edit');
    
        $blog = Blog::with('images')->where('slug',$slug)->firstOrFail();
        $editar = 'Si';
        return view('admin.blog.edit',compact('blog','editar'));
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
        $this->authorize('haveaccess','blog.edit');

        $request->validate([
            'nombre' => 'required|unique:blogs,nombre,'.$id,
            'slug' => 'required|unique:blogs,slug,'.$id,
            'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20480'

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
        $blog = Blog::findOrFail($id);

        $blog->nombre=                  $request->nombre;
        $blog->slug=                    $request->slug;
        $blog->descripcion=             $request->descripcion;
       

        

        // if ($request->activo) {
        //     $prod->activo= 'Si';    
        // }
        // else {
        //     $prod->activo= 'No';    
        // }


        $blog->save();


        $blog->images()->createMany($urlimagenes);

        return redirect()->route('admin.blog.edit',$blog->slug)->with('datos','Registro actualizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('haveaccess','blog.destroy');

        $blog= Blog::with('images')->findOrFail($id);
        foreach($blog->images as $image) {
            
            $archivo = substr($image->url,1);

             File::delete($archivo);
    
            $image->delete();
        }

        $blog->delete();
        return redirect()->route('admin.blog.index')->with('datos','Registro eliminado correctamente!');
    }
}
