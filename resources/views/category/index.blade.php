{{-- Añadir campo=slidercategoria a categoria con "Si" si queremos que se muestre en la pagina categorias y "no" de lo contrario. 
Todas las categorias se mostraran en el menu desplegable del navbar --}}
@extends('plantilla')

@section('titulo', 'santifoods')
@section('contenido')

{{-- <h2>VISTA CATEGORIAS</h2> --}}
{{-- <div class="col-span-4"> --}}
{{-- <div class="grid-container" style="grid-auto-flow: row;">
  @foreach ($categorias as $categoria)
      @if($categoria->slidercategoria=='Si')
 
        <a href="{{ url('/cocinamos/showcooking')}}" class="cocinamos-container1">
          
            <div class="cocinamos-container-image" style="background-image:url(http://localhost:8000/asset/images/0019txokojaieneahd.jpg)"></div>
            <div class="cocinamos-container1-title">{{$categoria->nombre }}</div>
        
        </a>
       
    
      @endif
  @endforeach
  
</div>
</div> --}}
<div class="container pb-5">
  <ul class="row justify-content-center">
    <div class="col-sm-12 mt-5 mb-5"><h1 class="text-center">CATEGORIAS</h1></div>
      @foreach ($categorias as $categoria)
      <div class="col-sm-4">
          @if($categoria->slidercategoria=='Si')
            <div class="card-shadow">
              
              <a class="btn btn-light" href="{{ route('recipe.index',$categoria->slug)}}" role="button"><img src="asset/images/0042txokojaieneahd.jpg"/></a>
              <div class="c-container1-title">{{$categoria->nombre}}</div>
              {{-- <td> <a class="btn btn-light"  
                href="">Ver</a>
              </td> --}}

              {{-- <td> <a class="btn btn-default"  
                href="{{ route('category',$receta->slug) }}">Ver</a>
              </td> --}}




              {{-- <div class="card-body">


               
            </div> --}}
              
            </div>
          @endif
        </div>
      @endforeach
  </ul>
</div>







            {{-- <li class="bg-white rounded-x1 shadow }}">
              <article>
                <figure>
                  <img class="h-48 w-full object-cover object-center" src="asset/images/0042txokojaieneahd.jpg" alt="">
                </figure>

                <div class="my-4 mx-6">
                  <h1 class="text-lg font-semibold">
                    <a href="">
                      {{ Str::limit($categoria->name,20) }}
                    </a>

                  </h1>
                
                </div>
                
              </article>
            </li> --}}
  
          {{-- <a href="{{ url('/cocinamos/showcooking')}}" class="cocinamos-container1">
            
              <div class="cocinamos-container-image" style="background-image:url(http://localhost:8000/asset/images/0019txokojaieneahd.jpg)"></div>
              <div class="cocinamos-container1-title">{{$categoria->nombre }}</div>
          
          </a> --}}
        





@endsection