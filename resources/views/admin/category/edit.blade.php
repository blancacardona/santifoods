@extends('admin')


@section('titulo', 'Editar Categoría')

@section('breadcrumb')
  <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Categorías</a></li>
  <li class="breadcrumb-item active">@yield('titulo')</li>
@endsection


@section('contenido')



<div id="apicategory">
    <form action="{{ route('admin.category.update',$cat->id) }}" method="POST">
      @csrf

      @method('PUT')


      <span style="display:none;" id='editar'>{{ $editar }}</span>
      <span style="display:none;" id="nombretemp">{{$cat->nombre}}</span>

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Administración de Categorias</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
                    
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input v-model="nombre" 
    
                            @blur="getCategory" 
                            @focus = "div_aparecer= false"
                        
                        class="form-control" type="text" name="nombre" id="nombre">
                        <label for="slug">Slug</label>
                        <input 
                        readonly 
                        v-model="generarSLug"  
                        class="form-control" type="text" name="slug" id="slug">
                       
                        <div v-if="div_aparecer" v-bind:class="div_clase_slug">
                           @{{ div_mensajeslug }}
                        </div>
                        <br v-if="div_aparecer">
                        
                        
                    </div>
                    <div class="row">
                      <!-- /.col -->
                      <div class="col-sm-6">
                            <!-- checkbox -->
        
                            <div class="form-group">
                            <div class="custom-control custom-switch">
                              <input type="checkbox"  class="custom-control-input" id="slidercategoria" name="slidercategoria" 
                                @if($cat->slidercategoria=='Si')
                                    checked
                                @endif
                              >
                              <label class="custom-control-label" for="slidercategoria">Aparece en el Slider principal</label>
                            </div>
                          </div>
        
                          </div>
        
                        
        
               </div>
                   

        </div>
        <!-- /.card-body -->
        <div class="card-footer">

          <a class="btn btn-danger" href="{{ route('cancelar','admin.category.index') }}">Cancelar</a>


                    <input 
                    :disabled = "deshabilitar_boton==1"
                  type="submit" value="Guardar" class="btn btn-primary float-right">
          
                
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
    </form>
</div>


 @endsection     