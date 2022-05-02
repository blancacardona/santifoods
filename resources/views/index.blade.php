@extends('plantilla')
@section('titulo', 'santifoods')
@section('contenido')
<div class="super_container_inner">
    <div class="super_overlay"></div>

    <!-- Home -->

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
      <span class="visually-hidden"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden"></span>
    </button>
  </div>

    <!-- Products -->

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section_title text-center">Últimas recetas</div>
                </div>
            </div>
            
            <div class="row products_row">
                
                <!-- Product -->
                <div class="col-xl-4 col-md-6">
                    <div class="product">
                        <div class="product_image"><img src="http://localhost:8000/asset/images/product_1.jpg" alt=""></div>
                        <div class="product_content">
                            <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div>
                                        <div class="product_name"><a href="product.html">Cool Clothing with Brown Stripes</a></div>
                                        
                                    </div>
                                </div>
                                <div class="ml-auto text-right">
                                    <div class="product_category">In <a href="category.html">Category</a></div>
                                    <div class="product_price text-right">$3<span>.99</span></div>
                                </div>
                            </div>
                            <div class="product_buttons">
                                <div class="text-right d-flex flex-row align-items-start justify-content-start">										
                                    <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                        <div><div><img src="http://localhost:8000/asset/images/cart.svg" class="svg" alt=""><div>+</div></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
 
@endsection