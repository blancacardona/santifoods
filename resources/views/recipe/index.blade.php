{{-- Añadir campo=slidercategoria a categoria con "Si" si queremos que se muestre en la pagina categorias y "no" de lo contrario. 
Todas las categorias se mostraran en el menu desplegable del navbar --}}
@extends('plantilla')

@section('titulo', 'santifoods')
@section('contenido')


<div class="container pb-5">
  <ul class="row justify-content-center">
    {{-- <div class="col-sm-12 mt-5 mb-5"><h1 class="text-center">{{$categorias->nombre}}</h1></div> --}}
      @foreach ($recetas as $receta)
      <div class="col-sm-4">
          @if($receta->categoria->nombre == $categoria->nombre )
            <div class="card-shadow">
              
              <a class="btn btn-light" href="{{ route('recipe.show',$receta->slug)}}" role="button"><img src="asset/images/0042txokojaieneahd.jpg"/></a>
              <div class="c-container1-title">{{$receta->nombre}}</div>
              

              
            </div>
          @endif
        </div>
      @endforeach
  </ul>
</div>
        





@endsection