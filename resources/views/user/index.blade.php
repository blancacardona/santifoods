@extends('admin')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>Lista de Usuarios</h2></div>

                <div class="card-body">

                    <br><br>

                    @include('custom.message')

                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Roles</th>
                            <th colspan="3"></th>
                          </tr>
                        </thead>
                        <tbody>
                          
                            
                            @foreach ($users as $user)
                            
                            <tr>
                                <th scope="row">{{ $user->id}}</th>
                                <td>{{ $user->name}}</td>
                                <td>{{ $user->email}}</td>
                                <td>
                                @isset( $user->roles[0]->name )
                                  {{ $user->roles[0]->name}}
                                @endisset
                                
                                </td>
                                <td> 
                                @can('view',[$user, ['user.show','userown.show'] ])
                                  <a class="btn btn-info" href="{{ route('user.show',$user->id)}}">Mostrar</a> 
                                @endcan
                                </td>  
                                <td> 
                                @can('view', [$user, ['user.edit','userown.edit'] ])
                                  <a class="btn btn-success" href="{{ route('user.edit',$user->id)}}">Editar</a> 
                                @endcan
                                </td>  
                                <td> 
                                @can('haveaccess','user.destroy')
                                  <form action="{{ route('user.destroy',$user->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Eliminar</button>
                                  </form>
                                @endcan
                                  

                                </td>  
                            </tr>      
                            @endforeach
                            

                            
                          
                         
                        </tbody>
                      </table>

                      {{ $users->links() }}




                </div>
            </div>
        </div>
    </div>
</div>
@endsection