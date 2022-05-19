{{-- Añadir campo=slidercategoria a categoria con "Si" si queremos que se muestre en la pagina categorias y "no" de lo contrario. 
Todas las categorias se mostraran en el menu desplegable del navbar --}}
@extends('plantilla')

@section('titulo', 'santifoods')
@section('contenido')

<div class="container pb-5">
  <ul class="row justify-content-center">
    <div class="col-sm-12 mt-5 mb-5"><h1 class="text-center">CATEGORIAS</h1></div>


        <div class="container">
          <div class="row row-cols-1 row-cols-lg-3 g-3 g-lg-3">
            @foreach ($categorias as $categoria)
              <div class="col" >
                
                <a href="{{ route('recipe.index',$categoria->nombre)}}" role="button" >
                  <div class="container" style="background-color: #EFE4C5; text-align:center"> 
                  {{-- <div class="categoria-container" style="background-image:url(asset/images/0042txokojaieneahd.jpg)">  --}}
                    <div class="container-fluid " style="height: 150px;">
                      <br>
                      <br>
                      <div style="color: grey; font-size: 20px; font-weight:bold;">{{$categoria->nombre}}</div>
                        
                    </div>
                  </div>
                  
                    
                </a>
   
              </div>
            @endforeach
           
           
          </div>
        </div>
  </ul>
</div>







@endsection

{{-- @yield('scripts') --}}