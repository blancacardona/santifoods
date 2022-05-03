<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $nombre = $request->get('nombre');
        $categorias = Category::all(); 
        return view('category.index',compact('categorias'));
  
    }
   


   

}
