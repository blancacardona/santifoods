<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('titulo')</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Jhonatan Shop template">
<meta name="viewport" content="width=device-width, initial-scale=1">



<link rel="stylesheet" type="text/css" href="{{asset('asset/styles/bootstrap-4.1.2/bootstrap.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('asset/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('asset/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('asset/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('asset/plugins/OwlCarousel2-2.2.1/animate.css') }}">


<link rel="stylesheet" type="text/css" href="{{ asset('asset/styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('asset/styles/responsive.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('asset/styles/comun.css') }}">

</head>
<body>

<!-- Menu -->

<div class="menu">

	<!-- Search -->
	<div class="menu_search">
		<form action="#" id="menu_search_form" class="menu_search_form">
			<input type="text" class="search_input" placeholder="Search Item" required="required">
			<button class="menu_search_button"><img src="http://localhost:8000/asset/images/search.png" alt=""></button>
		</form>
	</div>
	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
			<li><a href="#">Inicio</a></li>
			<li><a href="#">Clases</a></li>
			<li><a href="#">Recetas</a></li>
            <li><a href="#">Restaurantes</a></li>
            <li><a href="#">Eventos</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Sobre mi</a></li>
			
		</ul>
	</div>
	<!-- Contact Info -->
	<div class="menu_contact">
		<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<div><div><img src="http://localhost:8000/asset/images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
			<div>+1 912-252-7350</div>
		</div>
		<div class="menu_social">
			<ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="#">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="http://localhost:8000/asset/images/logo.png" alt=""></div>
						<div>santifoods</div>
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li class="active"><a href="#">Inicio</a></li>
					<li><a href="#">Clases</a></li>
					<li><a href="#">Recetas</a></li>
                    <li><a href="#">Restaurantes</a></li>
                    <li><a href="#">Eventos</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="#">Sobre mi</a></li>					
				</ul>
			</nav>
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				
				<!-- Cart -->
				<div class="cart"><a href="cart.html"><div><img class="svg" src="http://localhost:8000/asset/images/cart.svg" alt="https://www.flaticon.com/authors/freepik"><div>1</div></div></a></div>
				</div>
			</div>
		</div>
	</header>

    @yield('contenido')

		<!-- Footer -->

		<footer class="footer">
			<div class="footer_content">
				<div class="container">
					<div class="row">

						<!-- Footer Links -->

						<!-- Footer Contact -->
						<div class="col-lg-4 footer_col">
							<div class="footer_contact">
								<div class="footer_title">Suscríbete a mi newsletter</div>
								<div class="newsletter">
									<form action="#" id="newsletter_form" class="newsletter_form">
										<input type="email" class="newsletter_input" placeholder="Suscríbete a nuestro boletín" required="required">
										<button class="newsletter_button">+</button>
									</form>
								</div>
								<div class="footer_social">
									<div class="footer_title">Social</div>
									<ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer_bar">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
								<div class="copyright order-md-1 order-2"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
		
</div>

<script src="{{asset('asset/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{asset('asset/styles/bootstrap-4.1.2/popper.js') }}"></script>
<script src="{{asset('asset/styles/bootstrap-4.1.2/bootstrap.min.js') }}"></script>
<script src="{{asset('asset/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{asset('asset/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{asset('asset/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{asset('asset/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{asset('asset/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{asset('asset/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{asset('asset/plugins/easing/easing.js') }}"></script>
<script src="{{asset('asset/plugins/progressbar/progressbar.min.js') }}"></script>
<script src="{{asset('asset/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{asset('asset/js/custom.js') }}"></script>
</body>
</html>