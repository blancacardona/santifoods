@extends('plantilla')

@section('titulo', 'santifoods')
@section('contenido')

@yield('scripts')
{{-- <div class="container pb-5">
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
</div> --}}
        



<div class="container product">
  <div class="row">
      <div class="col-md-12">
          <ol class="breadcrumb">
              <li><a href="{{ route('home') }}"> <i class="fa fa-home"></i> Home</a></li>
              @if(isset($category))
              <li><a href="{{ route('front.category.slug', $category->slug) }}">{{ $category->name }}</a></li>
              @endif
              <li class="active">Product</li>
          </ol>
      </div>
  </div>
  {{-- @include('layouts.front.product') --}}
</div>


@endsection