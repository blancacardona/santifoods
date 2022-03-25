<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class ShowcookingController extends Controller
{
    public function create()
    {
        return view('showcooking');
    }

    public function store(Request $request)
    {
        if ( ! Showcooking::isSubscribed($request->nombre) ) 
        {
            Showcooking::subscribePending($request->nombre);
            // Showcooking::subscribePending($request->nombre);
            // Showcooking::subscribePending($request->apellidos);
            // Showcooking::subscribePending($request->correo);
            // Showcooking::subscribePending($request->personas);
            // Showcooking::subscribePending($request->descripcion);
            // Showcooking::subscribePending($request->fecha);
            return redirect('showcooking')->with('success', '¡Recibido! Nos pondremos en contacto contigo lo antes posible');
        }
        return redirect('showcooking')->with('failure', 'Sorry! You have already subscribed ');
            
    }
}
