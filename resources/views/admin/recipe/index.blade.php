@extends('admin')


@section('titulo', 'Administración de Recetas')

@section('breadcrumb')
  <li class="breadcrumb-item active">@yield('titulo')</li>
@endsection


@section('contenido')
<style type="text/css">
  .table1 {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
    text-align: center;
  }
  .table1 td, .table1 th {
    padding: .75rem;
    vertical-align: center;
    border-top: 1px solid #dee2e6;
  }
</style>  


<div id="confirmareliminar" class="row">

  <span style="display:none;" id="urlbase">{{route('admin.recipe.index')}}</span>
  @include('custom.modal_eliminar')
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Sección de Recetas</h3>

          <div class="card-tools">
            
            <form>              
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="nombre" class="form-control float-right" 
                placeholder="Buscar"
                value="{{ request()->get('nombre') }}"
                >

                <div class="input-group-append">
                  <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </form>

          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" >
          @can('haveaccess','recipe.create')    
            <a class=" m-2 float-right btn btn-primary"  href="{{ route('admin.recipe.create') }}">Crear</a>
          @endcan

          <table class="table1 table-head-fixed">
            <thead>
              <tr>
                <th>ID</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Activo</th>
                <th>Slider Principal</th>
                <th colspan="3"></th>
              </tr>
            </thead>
            <tbody>

                @foreach ($recetas as $receta)
                    <tr>
                        <td> {{$receta->id }} </td>
                        <td>  
                           @if ($receta->images->count()<=0 )
                              <img style="height: 100px;    width: 100px;" src="/imagenes/avatar.png" class="round-circle">
                           @else
                              <img style="height: 100px;    width: 100px;" src="{{ $receta->images->random()->url }}" class="round-circle">   
                           @endif

                          


                        </td>
                        <td> {{$receta->nombre }} </td>
                        <td> {{$receta->activo }} </td>
                        <td> {{$receta->principal }} </td>

                        @can('haveaccess','recipe.show') 
                        <td> <a class="btn btn-default"  
                            href="{{ route('admin.recipe.show',$receta->slug) }}">Ver</a>
                        </td>
                        @endcan
                        @can('haveaccess','recipe.edit') 
                        <td> <a class="btn btn-info" 
                            href="{{ route('admin.recipe.edit',$receta->slug) }}">Editar</a>
                        </td>
                        @endcan
                        @can('haveaccess','recipe.destroy') 
                        <td> <a class="btn btn-danger" 
                            href="{{ route('admin.recipe.index') }}" 
                            v-on:click.prevent="deseas_eliminar({{$receta->id}})"
                            >Eliminar</a>
                        </td>
                        @endcan
                        
                    </tr>
                @endforeach
             
              
            </tbody>
          </table>
          {{ $recetas->appends($_GET)->links() }}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->



 @endsection 