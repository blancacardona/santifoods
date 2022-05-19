@extends('plantilla')

@section('titulo', 'santifoods')
@section('contenido')

<div class="container pb-5">
  <ul class="row justify-content-center">
    <div class="col-sm-12 mt-5 mb-5"><h1 class="text-center">BLOGS</h1></div>


        <div class="container">
          <div class="row row-cols-1 row-cols-lg-3 g-3 g-lg-3">
            @foreach ($blogs as $blog)
                <div class="col" >
                    
                    <a href="{{ route('blog.show',$blog->slug)}}" role="button" >
                    
                    <div class="container"> 
                        <img src="{{ $blog->images->random()->url }}" class="card-img-top" alt="..."  style="width:350px; height:250px;">
                        
                    </div>
                    <div class="container">
                        <br>
                        <p style="color: #514623">{{$blog->nombre}}</p>
                        <br>
                    </div>
                    
                        
                    </a>
    
                </div>
            @endforeach
           
           
          </div>
        </div>
  </ul>
</div>







@endsection