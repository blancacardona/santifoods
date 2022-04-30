@extends('admin')


@section('titulo', 'Crear Receta')

@section('breadcrumb')
  <li class="breadcrumb-item"><a href="{{route('admin.recipe.index')}}">Recetas</a></li>
  <li class="breadcrumb-item active">@yield('titulo')</li>
@endsection


@section('estilos')
  <!-- Select2 -->
 <link rel="stylesheet" href="/adminlte/plugins/select2/css/select2.min.css">
 <link rel="stylesheet" href="/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

@endsection

@section('scripts')
  
 <!-- Select2 -->
<script src="/adminlte/plugins/select2/js/select2.full.min.js"></script>

<script src="/adminlte/ckeditor/ckeditor.js"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('#category_id').select2()
    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });
  });
</script> 

@endsection


@section('contenido')

 
<div id="apirecipe">




<form action="{{ route('admin.recipe.store') }}" method="POST" enctype="multipart/form-data" >
@csrf

  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Datos de las recetas</h3>

          
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">

                  <label>Nombre</label>
                  <input 

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
                  <select name="category_id" id="category_id" class="form-control " style="width: 100%;">
                    @foreach($categorias as $categoria)
                    
                     @if ($loop->first)
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

                  <label>Descripción</label>
                  <textarea class="form-control ckeditor" name="descripcion" id="descripcion" rows="3"></textarea>

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
                <textarea class="form-control ckeditor" name="ingredientes" id="ingredientes" rows="3"></textarea>
                <label>Tiempo</label>
                  <input class="form-control" type="text" id="tiempo" name="tiempo" value="00:00">

              </div>
              <!-- /.form-group -->
              
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">

                <label>Elaboración</label>
                <textarea class="form-control ckeditor" name="elaboracion" id="elaboracion" rows="3"></textarea>

                <label>Raciones</label>
                <input class="form-control" type="number" id="raciones" name="raciones" value="0">

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




    <div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title">Imágenes</h3>

      
    </div>
    <!-- /.card-header -->
    <div class="card-body">

      <div class="form-group">
          
          <label for="imagenes">Añadir imágenes</label> 
                        
          <input type="file" class="form-control-file" name="imagenes[]" id="imagenes[]" multiple 
          accept="image/*" >
          
          <div class="description">
          Un número ilimitado de archivos pueden ser cargados en este campo. 
            <br>
            Límite de 2048 MB por imagen.
            <br>
            Tipos permitidos: jpeg, png, jpg, gif, svg.
            <br>
          </div>

      </div>


    </div>


    <!-- /.card-body -->
    <div class="card-footer">
      
    </div>
  </div>
        <!-- /.card -->


  <div class="card card-danger">
      <div class="card-header">
        <h3 class="card-title">Administración</h3>
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
                  <input type="checkbox"  class="custom-control-input" id="principal" name="principal">
                  <label class="custom-control-label" for="principal">Aparece en el Slider principal</label>
                </div>
              </div>

              </div>

            

      </div>
            <!-- /.row -->




      <div class="row">
            <div class="col-md-12">
              <div class="form-group">

                  <a class="btn btn-danger" href="{{ route('cancelar','admin.recipe.index') }}">Cancelar</a>
                  <input    
                  :disabled = "deshabilitar_boton==1"
                                
                type="submit" value="Guardar" class="btn btn-primary">
                
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
  <!-- /.card -->






</div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->



    </form>
  </div>

 @endsection