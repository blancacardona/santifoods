@extends('layouts.fronted.inicio')
@section('navbar')
    <header>
    <a href="#" class="logo">
        <h5 style="float: left; color: black" class="imgtamaño">santifoods</h5>
        <!--<img  class="imgtamaño" src="{{ asset('img/jldm.png')}}" alt="JLDM ! Proyects">-->
    </a>
    <div class="menu-toggle" ></div>
        <nav>
            <ul>
                <li><a href="" class="active">INICIO</a></li>
                <li><a href="{{ url('/clases')}}">CLASES</a></li>
                <li><a href="{{ url('/recetas')}}">RECETAS</a></li>
                <li><a href="{{ url('/restaurantes')}}">RESTAURANTES</a></li>
                <li><a href="{{ url('/eventos')}}">EVENTOS</a></li>
                <li><a href="{{ url('/contacto')}}">CONTACTO</a></li>
                <li><a href="{{ url('/sobremi')}}">SOBRE MI</a></li>
            </ul>
        </nav>
        <!-- <div class="clearfix"></div> -->
    </header>
@endsection
@section('banner')
<div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-text">
                        <!-- <h4>PAGINA <span>WEB</span></h4>
						<br>
						<br> -->
                        <h1 class="tipeo1">santifoods</h1>
                        <h2 class="tipeo2">"SI COCINO YO, COCINAS TÚ"</h2>
                        <div class="botonesinfo">
                        <a href="{{ url('/clases')}}" class="btn hero-btn2 btn1">Clases online</a>
                        <a href="{{ url('/recetas')}}" class="btn hero-btn2 btn1">Ver recetas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 

@section('footer')
<footer class="footer">
    <div class="l-footer">
        <!--<img  class="footer_img" src="{{asset('img/JLDIAZ.png')}}" alt="JLDM | Proyectos">-->
        <h2 style="color: white" class="footer_img">santifoods</h2>
    </div>
        <ul class="r-footer">
            <li>
            <h2>Social</h2>
                <ul class="box">
                    <li class="button_social">
                        <i class="fab mr-2 fa-facebook"></i>
                        <a href="https://www.linkedin.com/in/jose-diaz-mira/" target="_blank">Facebook</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-instagram"></i>
                        <a href="https://www.instagram.com/santifoods/" target="_blank">Instagram</a>
                    </li>
                </ul>
            </li>
            <li class="features">
            <h2>Información</h2>
            <ul class="box">
                <li><a href="#">Políticas de Privacidad</a></li>
                <li><a href="#">Trabaja con nosotros</a></li>
            </ul>
            </li>
        </ul>
        <div class="b-footer">
            <p>Todos los Derechos reservados by <a href="https://josediazmirano.github.io/jldiaz/" target="_blank">©JLDIAZ-2020</a></p>
        </div>
</footer>
@endsection
@section('title')
<div class="col-12">
		<div class="testimonial-title">
			<h5>CONOCE</h5>
            <h3>NUESTRAS CATEGORÍAS</h3>
            <hr class="style1">
	    </div>
</div>
@endsection
@section('redes')
<div class="red">
    <div id="facebook">
        <a href="https://www.youtube.com/channel/UCuRgEjJgi9iZFCYVSASpXDw" target="none" class="fab fa-facebook-f "></a>
    </div>
    <div id="instagram">
        <a href="https://www.instagram.com/santifoods/" target="none" class="fab fa-instagram"></a>
    </div>
</div>
@endsection
