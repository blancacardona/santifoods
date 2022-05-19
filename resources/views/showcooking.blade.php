@extends('plantilla')

@section('titulo', 'santifoods')
@section('contenido')


<div class="page-title">SHOWCOOKING</div>
<div class="cocinamos-descripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>


{{-- <div class="form"> --}}
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
    
    
          {{-- <div class="form_title">Teambuilding</div>
          <div class="form_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
     --}}
          <br /><br />
    
          <div class="form">
    
              <div class="mb-3">
                <label for="formInput1" class="form-label">Nombre*</label>
                <input type="nombre" class="form-control" placeholder="" width="40px">
              </div>
              <div class="mb-3">
                <label for="formInput2" class="form-label">Correo*</label>
                <input type="correo" class="form-control">
              </div>
              <div class="mb-3">
                <label for="formInput2" class="form-label">Teléfono*</label>
                <input type="telefono" class="form-control">
              </div>
              <div class="mb-3">
                <label for="formInput3" class="form-label">Detalles</label>
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <div class="mb-3">
                <label for="formInput4" class="form-label">Nº personas*</label>
                <input type="personas" class="form-control">
              </div>
              <div class="mb-3">
                <label for="formInput5" class="form-label">Fecha*</label>
                <input type="fecha" class="form-control">
              </div>
              <br>
              <div class="mb-3">
                {{-- <label for="exampleFormControlInput1" class="form-label"></label> --}}
                <button type="submit" class="btn btn-success" style="background: #38C98B; border: none;">Enviar</button>
              </div>
          </div>
        </form>    

        <div class="teambuilding-image"><img src="http://localhost:8000/asset/images/0042txokojaieneahd.jpg" alt=""></div>



@endsection