@extends('plantilla')

@section('titulo', 'santifoods')
@section('contenido')


<div class="container pb-5">
  <ul class="row justify-content-center">
    <div class="col-sm-12 mt-5 mb-5"><h1 class="text-center">{{$receta->nombre}}</h1></div>
     <div>{{$receta->descripcion}}</div>
     <div>Ingredientes:</div>
     <div>{{$receta->ingredientes}}</div>
     <div>Elaboración:</div>
     <div>{{$receta->elaboracion}}</div>
     @foreach ($receta->images as $image)
      {{$image}}
     @endforeach
        
        
    
  </ul>
</div>
        


@endsection