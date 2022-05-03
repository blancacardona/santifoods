@extends('plantilla')

@section('titulo', 'santifoods')
@section('contenido')

<div class="container pb-5">
  <ul class="row justify-content-center">
    <div class="col-sm-12 mt-5 mb-5"><h1 class="text-center">ENTRANTES</h1></div>
      @foreach ($recetas as $receta)
      <div class="col-sm-4">
          @if($receta->category->nombre =='Entrantes'))
            <div class="card-shadow">
              
              <a class="btn btn-light" href="{{ url('/cocinamos/showcooking')}}" role="button"><img src="asset/images/0042txokojaieneahd.jpg"/>{{ $receta->nombre }}</a>
              {{-- <div class="c-container1-title">TEAM BUILDING</div> --}}
              {{-- <div class="card-body">


               
            </div> --}}
              
            </div>
          @endif
        </div>
      @endforeach
  </ul>
</div>
        





@endsection