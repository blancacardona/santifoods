@extends('admin')


@section('titulo', 'Administración de Categorías')

@section('breadcrumb')
  <li class="breadcrumb-item active">@yield('titulo')</li>
@endsection


@section('contenido')



<div id="confirmareliminar" class="row">

  <span style="display:none;" id="urlbase">{{route('admin.category.index')}}</span>
  @include('custom.modal_eliminar')
    <div class="col-12">
      <div class="card">
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">  
          <a class=" m-2 float-right btn btn-primary"  href="{{ route('admin.category.create') }}">Crear</a>
          <table class="table table-head-fixed">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Slug</th>
                <th>Fecha creación</th>
                <th>Fecha modificación</th>
                <th colspan="3"></th>
              </tr>
            </thead>
            <tbody>

                @foreach ($categorias as $categoria)
               
                    <tr>
                        <td> {{$categoria->id }} </td>
                        <td> {{$categoria->nombre }} </td>
                        <td> {{$categoria->slug }} </td>
                        <td> {{$categoria->created_at }} </td>
                        <td> {{$categoria->updated_at }} </td>

                        <td> <a class="btn btn-default"  
                            href="{{ route('admin.category.show',$categoria->slug) }}">Ver</a>
                        </td>

                        <td> <a class="btn btn-info" 
                            href="{{ route('admin.category.edit',$categoria->slug) }}">Editar</a>
                        </td>

                        <td> <a class="btn btn-danger" 
                            href="{{ route('admin.category.index') }}"
                            v-on:click.prevent="deseas_eliminar({{$categoria->id}})"
                            >Eliminar</a>
                        </td>
                        
                    </tr>
                @endforeach
             
              
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->
  @endsection     