@extends('plantilla.plantilla')

@section('titulo', 'santifoods')
@section('contenido')

<div class="super_container_inner">
    <div class="super_overlay"></div>

    <!-- Home -->

    <div class="home">
        <!-- Home Slider -->
        <div class="home_slider_container">
            <div class="owl-carousel owl-theme home_slider">
                
                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(http://localhost:8000/asset/images/home.jpg)"></div>
                    <div class="container fill_height">
                        <div class="row fill_height">
                            <div class="col fill_height">
                                <div class="home_container d-flex flex-column align-items-center justify-content-start">
                                    <div class="home_content">
                                        <div class="home_title">santifoods</div>
                                        <div class="home_subtitle">"SI COCINO YO, COCINAS TÚ"</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>	
                </div>

        </div>
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