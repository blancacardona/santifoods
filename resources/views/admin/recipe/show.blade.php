@extends('admin')


@section('titulo', 'Ver Receta')

@section('breadcrumb')
  <li class="breadcrumb-item"><a href="{{route('admin.recipe.index')}}">Recetas</a></li>
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
      "nombre":"{{$receta->nombre}}",
    }
  }
  $(function () {
    //Initialize Select2 Elements
    $('#category_id').select2()
    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });
    //uso de lightbox
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });
  });
</script> 

@endsection


@section('contenido')

 
<div id="apirecipe">




<form action="{{ route('admin.recipe.update',$receta->id) }}" method="POST" enctype="multipart/form-data" >
@csrf
@method('PUT')

  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Datos de la receta</h3>

          
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
                   @blur="getRecipe" 
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
                 <label>Categoria</label>
                  <select disabled name="category_id" id="category_id" class="form-control " style="width: 100%;">
                    @foreach($categorias as $categoria)
                    
                     @if ($categoria->nombre == $receta->category->nombre)
                        <option value="{{ $categoria->id }}" selected="selected">{{ $categoria->nombre }}</option>
                     @else
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                     @endif
                    @endforeach

                  </select>
                 
                </div>
                <!-- /.form-group -->
                
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">

                  <label>Descripci??n</label>
                  <textarea class="form-control ckeditor" name="descripcion" id="descripcion" rows="3">
                    {!! $receta->descripcion !!}
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

      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Contenido recetas</h3>

        
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">

                <label>Ingredientes</label>
                <textarea class="form-control ckeditor" name="ingredientes" id="ingredientes" rows="3">
                  {!! $receta->ingredientes !!}
                </textarea>
                  
                <label>Tiempo</label>
                  <input class="form-control" type="text" id="tiempo" name="tiempo"
                  value="{{ $receta->tiempo}}">

              </div>
              <!-- /.form-group -->
              
            </div>

            <div class="col-md-6">
                <div class="form-group">
  
                  <label>Elaboraci??n</label>
                  <textarea class="form-control ckeditor" name="elaboracion" id="elaboracion" rows="3">
                    {!! $receta->elaboracion !!}
                  </textarea>

                  <label>Raciones</label>
                  <input class="form-control" type="number" id="raciones" name="raciones"
                  value="{{ $receta->raciones}}">
  
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
  
                @foreach ($receta->images as $image)
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
            <h3 class="card-title">Administraci??n</h3>
          </div>
          <!-- /.card-header -->
      <div class="card-body">
    
        <div class="row">
              
              <!-- /.col -->
              <div class="col-sm-6">
                    <!-- checkbox -->
                    {{-- <div class="form-group clearfix">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="activo" name="activo">
                        <label class="custom-control-label" for="activo">Activo</label>
                      </div>
    
                    </div> --}}
    
                    <div class="form-group">
                    <div class="custom-control custom-switch">
                      <input  disabled type="checkbox"  class="custom-control-input" id="principal" name="principal" 
                        @if($receta->principal=='Si')
                            checked
                        @endif
                      >
                      <label class="custom-control-label" for="principal">Aparece en el Slider principal</label>
                    </div>
                  </div>
    
                  </div>
    
                
    
          </div>
          <br>
                <!-- /.row -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
    
                       <a class="btn btn-danger" href="{{ route('cancelar','admin.recipe.index') }}">Cancelar</a>
                       
                       <a class="btn btn-outline-success" href="{{ route('admin.recipe.edit',$receta->slug) }}">Editar</a>
                     
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