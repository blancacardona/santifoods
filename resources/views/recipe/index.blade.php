{{-- Añadir campo=slidercategoria a categoria con "Si" si queremos que se muestre en la pagina categorias y "no" de lo contrario. 
Todas las categorias se mostraran en el menu desplegable del navbar --}}
@extends('plantilla')

@section('titulo', 'santifoods')
@section('contenido')


<div class="container pb-5">
  <ul class="row justify-content-center">
    <div class="col-sm-12 mt-5 mb-5"><h1 class="text-center">ÚLTIMAS RECETAS</h1></div>
    {{-- <div class="col-sm-12 mt-5 mb-5"><h1 class="text-center">{{$categorias->nombre}}</h1></div> --}}
    <div class="container">
      <ul class="row row-cols-1 row-cols-lg-3 g-3 g-lg-3">
        @foreach ($recetas as $receta)
          @foreach ($categorias as $categoria)
            @if ($categoria->nombre == $receta->category->nombre)
    


              <div class="col" >
                  
                <a href="{{ route('recipe.show',$receta->slug)}}" role="button" >
                
                  <div class="container"> 
                    <img src="{{ $receta->images->random()->url }}" class="card-img-top" alt="..."  style="width:350px; height:250px;">
                    
                  </div>
                  <div class="container">
                    <br>
                    <p style="color: #514623">{{$receta->nombre}}</p>
                    <br>
                  </div>
                  
                    
                </a>
  
              </div>

    
          
            @endif
        @endforeach
      @endforeach
      
    </ul>
  </div>

@endsection