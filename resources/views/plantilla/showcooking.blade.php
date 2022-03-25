@extends('plantilla.plantilla')

@section('titulo', 'santifoods')
@section('contenido')

<div class="form">
    <div class="form_title">¿Quieres ser todo un chef?</div>
        <div class="formulario_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            <div class="form_session">
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                      <p>{{ \Session::get('success') }}</p>
                    </div><br />
                @endif
                @if (\Session::has('failure'))
                  <div class="alert alert-danger">
                    <p>{{ \Session::get('failure') }}</p>
                  </div><br />
                @endif
                    
                <form method="post" action="{{url('showcooking')}}">
                    @csrf
                  </div>
                  <div class="row">
                      <div class="col-md-4"></div>
                        <div class="form-group col-md-2">
                          <label for="Nombre">Nombre:</label>
                          <input type="text" class="form-control" name="nombre">
                        </div>
                  </div>
                  {{-- <div class="row">
                      <div class="col-md-4"></div>
                        <div class="form-group col-md-2">
                          <label for="Apellidos">Apellidos:</label>
                          <input type="text" class="form-control" name="apellidos">
                        </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4"></div>
                        <div class="form-group col-md-2">
                          <label for="Correo">Correo:</label>
                          <input type="text" class="form-control" name="correo">
                        </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4"></div>
                        <div class="form-group col-md-2">
                          <label for="Personas">Nº personas:</label>
                          <input type="text" class="form-control" name="personas">
                        </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4"></div>
                        <div class="form-group col-md-2">
                          <label for="Descripcion">Descripción:</label>
                          <input type="text" class="form-control" name="descripcion">
                        </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4"></div>
                        <div class="form-group col-md-2">
                          <label for="Fecha">Fecha:</label>
                          <input type="text" class="form-control" placeholder="dd/mm/yyyy" name="fecha">
                        </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4"></div>
                      <div class="form-group col-md-4">
                        <button type="submit" class="btn btn-success">Enviar</button>
                      </div>
                  </div> --}}
                      
                </form>
  </div>



  @endsection