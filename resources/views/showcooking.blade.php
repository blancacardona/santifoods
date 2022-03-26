@extends('plantilla')

@section('titulo', 'santifoods')
@section('contenido')

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


      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="asset/images/0042txokojaieneahd.jpg" class="d-block w-100" height="750px">
          </div>
          <div class="carousel-item">
            <img src="asset/images/0026txokojaieneahd1.jpg" class="d-block w-100" height="750px">
          </div>
          <div class="carousel-item">
            <img src="asset/images/0019txokojaieneahd.jpg" class="d-block w-100" height="750px">
          </div>
          <div class="carousel-item">
            <img src="asset/images/0052txokojaieneahd.jpg" class="d-block w-100" height="750px">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="form_title">¿Quieres ser todo un chef?</div>
      <div class="form_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>

      <br /><br />

      <div class="form">

          <div class="mb-3">
            <label for="formInput1" class="form-label">Nombre</label>
            <input type="name" class="form-control" placeholder="" width="40px">
          </div>
          <div class="mb-3">
            <label for="formInput2" class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="formInput3" class="form-label">Descripción</label>
            <textarea class="form-control" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="formInput4" class="form-label">Nº personas</label>
            <input type="email" class="form-control">
          </div>
          <div class="mb-3">
            <label for="formInput5" class="form-label">Fecha</label>
            <input type="email" class="form-control" placeholder="dd/mm/yyyy">
          </div>
          <br>
          <div class="mb-3">
            {{-- <label for="exampleFormControlInput1" class="form-label"></label> --}}
            <button type="submit" class="btn btn-success" style="background: black; border: none;">Enviar</button>
          </div>
      </div>
      












      {{-- <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-2">
              <label for="Nombre">Nombre:</label>
              <input type="text" class="form-control" name="nombre">
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
            <label for="Descripcion">Descripción:</label>
            <input type="textarea" class="form-control" name="descripcion">
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
              <label for="Fecha">Fecha:</label>
              <input type="text" class="form-control" placeholder="dd/mm/yyyy" name="fecha">
            </div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="background: #2fce98; border: none;">Enviar</button>
          </div>
      </div> --}}
          
    </form>


  @endsection