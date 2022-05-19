@extends('plantilla')

@section('titulo', 'santifoods')
@section('estilos')
  <!-- Select2 -->
 <link rel="stylesheet" href="/adminlte/plugins/select2/css/select2.min.css">
 <link rel="stylesheet" href="/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!-- Ekko Lightbox -->
<link rel="stylesheet" href="/adminlte/plugins/ekko-lightbox/ekko-lightbox.css">
@endsection

@section('scripts')
  
 <!-- Select2 -->
<script src="/adminlte/plugins/select2/js/select2.full.min.js"></script>

<script src="/adminlte/ckeditor/ckeditor.js"></script>

<!-- Ekko Lightbox -->
<script src="/adminlte/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
@section('contenido')

<div id="apiblog">

    <div class="container pb-5">
        <ul class="row justify-content-center">
            <div class="col-sm-12 mt-5 mb-5"><h1 class="text-center">{{$blog->nombre}}</h1></div>


                <div class="container">
                  
                    <div class="text-center" >

                        <div class="c">
                            <br>
                            {{-- {{$blog->descripcion}} --}}
                            <div class="form-control ckeditor" name="descripcion" id="descripcion" rows="3" style="color: black; border:none">
                                {!! $blog->descripcion !!}
                            </div>
                            <br>
                        </div>
                        <div class="form-group">
                            <div class="container"> 
                                <br>
                                <img src="{{ $blog->images->random()->url }}" class="card-img-top" alt="..."  style="width:450px; height:350px;">
                                
                            </div>
                        </div>
                            
                     
        
                    </div>
               
                
                
                </div>
            </div>
        </ul>
    </div>







@endsection