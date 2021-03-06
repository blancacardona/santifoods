<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Image;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function index()
    {
        
        return Blog::all();
    }


    public function show($slug)
    {
        
        if (Blog::where('slug',$slug)->first()) {
            return 'Slug existe';
        }    
        else {
            return 'Slug Disponible';
        }
        
    }


    public function eliminarimagen($id)
    {
        
        //return "se va a eliminar el registro ".$id;
        $image = Image::find($id);

        $archivo = substr($image->url,1);

        $eliminar = File::delete($archivo);

        $image->delete();

        return "eliminado id:".$id. ' '.$eliminar;
    }








}