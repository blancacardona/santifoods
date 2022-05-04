@extends('admin')


@section('titulo', 'Ver Blog')

@section('breadcrumb')
  <li class="breadcrumb-item"><a href="{{route('admin.blog.index')}}">Blogs</a></li>
  <li class="breadcrumb-item active">@yield('titulo')</li>
@endsection


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

<script>
  window.data = {
    
    editar:'Si',
    
    datos: {
      "nombre":"{{$blog->nombre}}",
    }
  }
</script> 

@endsection


@section('contenido')

 
<div id="apiblog">




<form action="{{ route('admin.blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data" >
@csrf
@method('PUT')

  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Datos del Blog</h3>

          
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">

                  <label>Nombre</label>
                  <input 
                  readonly
                   v-model="nombre"     
                   @blur="getBlog" 
                   @focus = "div_aparecer= false"
                  
                  class="form-control" type="text" id="nombre" name="nombre">
                  <br>
                  <label>Slug</label>
                  <input 
                  readonly 
                  v-model="generarSLug"  
                  
                  class="form-control" type="text" id="slug" name="slug" >

                  <div v-if="div_aparecer" v-bind:class="div_clase_slug">
                    @{{ div_mensajeslug }}
                 </div>
                 <br v-if="div_aparecer">
                 <br>
                 <label>Descripción</label>
                  <textarea class="form-control ckeditor" name="descripcion" id="descripcion" rows="3">
                    {!! $blog->descripcion !!}
                  </textarea>
                 
                </div>
                <!-- /.form-group -->
                
              </div>
             
              <!-- /.col -->
            </div>
            <!-- /.row -->


          </div>
          <!-- /.card-body -->
          <div class="card-footer">
           
        </div>
      </div>
  
  
    </div>
        <!-- /.row -->
  
        <div class="card card-primary">
           
            <!-- /.card-header -->
            <div class="card-header">
              <div class="card-title">
               Galeria de imagenes
              </div>
            </div>
            <div class="card-body">
              <div class="row">
  
                @foreach ($blog->images as $image)
                <div id="idimagen-{{$image->id}}" class="col-sm-2">
                  <a href="{{ $image->url }}" data-toggle="lightbox" data-title="Id:{{ $image->id }}"  data-gallery="gallery">
                    <img style="width:150px; height:150px;" src="{{ $image->url }}" class="img-fluid mb-2" />
                  </a>
                  <br>
                  <a style="display:none" href="{{ $image->url }}"
                      v-on:click.prevent="eliminarimagen({{$image}})"
                    
                    >
                    <i class="fas fa-trash-alt" style="color:red"></i> Id:{{ $image->id }}
                  </a>
                </div>
                
                @endforeach
                
              </div>
            </div>
          </div>

          
    
    
      <div class="card card-danger">
          <div class="card-header">
            <h3 class="card-title">Administración</h3>
          </div>
          <!-- /.card-header -->
      <div class="card-body">
    
     
          <br>
                <!-- /.row -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
    
                       <a class="btn btn-danger" href="{{ route('cancelar','admin.blog.index') }}">Cancelar</a>
                       
                       <a class="btn btn-outline-success" href="{{ route('admin.blog.edit',$blog->slug) }}">Editar</a>
                     
                    </div>
                    <!-- /.form-group -->
                    
                  </div>
                  <!-- /.col -->    
    
           </div>


            </div>

            <!-- /.card-body -->
            <div class="card-footer">
              
            </div>
          </div>
          <!-- /.card --> 
        
        </div><!-- /.container-fluid -->
        
    </section>
    <!-- /.content -->

    </form>
  </div>

 @endsection