@extends('admin')


@section('titulo', 'Administración de Categorías')

{{-- @section('breadcrumb')
  <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Categorías</a></li>
  <li class="breadcrumb-item active">@yield('titulo')</li>
@endsection --}}


@section('contenido')


        <!-- /.row -->
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Sección de categorías</h3>
  
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
  
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                  <table class="table table-head-fixed text-nowrap">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Slug</th>
                        <th>Fecha creación</th>
                        <th>Fecha modificación</th>
                        <th colspan='3'></th>
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

                                {{-- @can('haveaccess','category.show') --}}
                                <td> <a class="btn btn-default href="{{ route('admin.category.show',$categoria->slug) }}">Ver</a>
                                </td>
                                {{-- @endcan --}}
                                {{-- @can('haveaccess','category.edit') --}}
                                <td> <a class="btn btn-info" href="{{ route('admin.category.edit',$categoria->slug) }}">Editar</a>
                                </td>
                                {{-- @endcan --}}
                                {{-- @can('haveaccess','category.destroy') --}}
                                <td> <a class="btn btn-danger" href="{{ route('admin.category.index') }}" v-on:click.prevent="deseas_eliminar({{$categoria->id}})">Eliminar</a>
                                </td>
                                {{-- @endcan --}}

                            </tr>
                        @endforeach

                      <tr>
                        <td>183</td>
                        <td>John Doe</td>
                        <td>11-7-2014</td>
                        <td><span class="tag tag-success">Approved</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>





 @endsection     