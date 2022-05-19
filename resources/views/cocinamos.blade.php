@extends('plantilla')

@section('titulo', 'santifoods')
@section('contenido')

<div class="cocinamos-super-container">
  <div class="page-title">¡COCINAMOS!</div>
  <div class="cocinamos-descripcion">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </div>
</div>
<div class="cocinamos-container">

  <a href="{{ url('/cocinamos/showcooking')}}" class="cocinamos-container1">
    <div class="cocinamos-container-image" style="background-image:url(http://localhost:8000/asset/images/0019txokojaieneahd.jpg)"></div>
    <div class="cocinamos-container1-title">SHOWCOOKING</div>
  </a>
  {{-- <button class="cocinamos-container2" href="{{ url('/showcooking/teambuilding')}}"> --}}
  <a href="{{ url('/cocinamos/teambuilding')}}" class="cocinamos-container1">
    <div class="cocinamos-container-image" style="background-image:url(http://localhost:8000/asset/images/0038txokojaieneahd.jpg)"></div>
    <div class="cocinamos-container1-title">TEAM BUILDING</div>
  </a>
  <a href="{{ url('/cocinamos/chefencasa')}}" class="cocinamos-container1">
    <div class="cocinamos-container-image" style="background-image:url(http://localhost:8000/asset/images/0052txokojaieneahd.jpg)"></div>
    <div class="cocinamos-container1-title">CHEF EN CASA</div>
  </a>

</div>


  {{-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
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
  </div> --}}



  @endsection