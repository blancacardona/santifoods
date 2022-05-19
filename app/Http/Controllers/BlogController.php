<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $nombre = $request->get('nombre');
        $blogs = Blog::all(); 
        return view('blog.index',compact('blogs'));
  
    }
    public function show($slug)
    {

        $blog = Blog::with('images')->where('slug',$slug)->firstOrFail();
        return view('blog.show',compact('blog'));
        
    }
   


   

}
