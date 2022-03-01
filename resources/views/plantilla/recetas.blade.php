@extends('plantilla.plantilla')

@section('titulo', 'santifoods')
@section('contenido')

@section('recetas')
<div class="container mt-5 mb-5">
    <div class="row">
        @foreach($recetas as $receta)
        <div class="col-md-4 col-sm-6">
            <div class="product-grid8">
                <div class="product-image8">
                    <a href="#">
                        <img  class="pic-1" src="{{asset('asset/images/recetas/'.$receta->image)}}" alt="{{$receta->image}}">
                        <!--<img class="pic-2" src="https://via.placeholder.com/280x300/FFF5EE/000000">-->
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-search"></a></li>
                    </ul>
                    <span class="product-discount-label">{{$receta->visible == 1 ? "En Stock":"Agotado"}}</span>
                </div>
                <div class="product-content">
                    <div class="price">{{$receta->name}}</div>
                    <!--<<span class="product-shipping">Free Shipping</span>-->
                    <h3 class="title"><a href="{{ route('searchCategory' ,$receta->categoria->name)}}">{{$receta->categoria->name}}</a></h3>
                    <a class="all-deals" href="{{route('product-details', $receta->slug)}}">Detalles<i class="fa fa-angle-right icon"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{$recetas->links()}}
</div>
@endsection
