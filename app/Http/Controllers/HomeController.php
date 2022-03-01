<?php

namespace App\Http\Controllers;

// use App\Models\Clientes;
use App\Models\Recetas;
// use App\Models\publicofert;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cons_user = User::count();
        // $cons_ofertas = publicofert::count();
        $cons_recetas = Recetas::count();
        // $cons_clientes = Clientes::count();
        return view('home',compact('cons_user','cons_recetas'));
    }
}