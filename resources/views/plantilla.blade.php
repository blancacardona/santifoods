<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>@yield('titulo')</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Jhonatan Shop template">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<link href="{{ asset('css/all.css') }}" rel="stylesheet">



<link rel="stylesheet" type="text/css" href="{{ asset('asset/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}">


<link rel="stylesheet" type="text/css" href="{{ asset('asset/styles/comun.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('asset/styles/main_styles.css') }}">

@yield('styles')




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</head>
<body>
<div id='app'>
		<!-- Menu -->

		{{-- <div class="menu">


			<div class="menu_contact">
				<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<button type="button" class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></button> 
				</div>
				
			</div>
		</div> --}}

		<div class="super_container">

			<!-- Header -->

			<nav class="navbar navbar-expand-lg navbar-light bg-white">
				<div class="container-fluid">
				  <a class="navbar-brand" href="#">Santifoods</a>
				  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="{{ url('/')}}">Inicio</a>
						</li>
					 	{{-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="{{route('category.index')}}" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Recetas
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="{{ url('/recetas')}}">Últimas Recetas</a></li>
								<li><a class="dropdown-item" href="{{ url('/entrantes')}}">Entrantes</a></li>
								<li><a class="dropdown-item" href="{{ url('/recetas')}}">Primeros</a></li>
								<li><a class="dropdown-item" href="#">Segundos</a></li>
								<li><a class="dropdown-item" href="#">Postres</a></li>
								<li><a class="dropdown-item" href="#">Pescados</a></li>
								<li><a class="dropdown-item" href="#">Carnes</a></li>
								<li><a class="dropdown-item" href="#">Pasta</a></li>
								<li><a class="dropdown-item" href="#">Recetas Especiales</a></li>
							</ul>
					  	</li> --}}
						<li class="nav-item">
							<a class="nav-link" href="{{ url('/category')}}">Recetas</a>
					  	</li>
					  	<li class="nav-item">
							<a class="nav-link" href="{{ url('/cocinamos')}}">Cocinamos</a>
					  	</li>
					  	<li class="nav-item">
							<a class="nav-link" href="{{ url('/blog')}}">Blog</a>
					  	</li>
					  	<li class="nav-item">
							<a class="nav-link" href="{{ url('/sobremi')}}">Sobre mi</a>
					  	</li>
					  
						<div class="menu_phone d-flex flex-row align-items-center justify-content-end float-right">
							{{-- <li><a href="#"><i class="fa fa-instagram float-right" aria-hidden="true"></i></a></li> --}}
							<a href="https://www.instagram.com/santifoods/">
								<button type="button" class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></button> 
							</a>	
						</div>
					  
					</ul>
				  </div>
				</div>
			  </nav>




















{{-- 

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
						<ul class="navbar-nav">
							<li class="nav-item"><a class="nav-link" href="{{ url('/')}}">Inicio</a></li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ url('/recetas')}}"id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Recetas</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<li><a class="dropdown-item" href="#">Últimas Recetas</a></li>
									<li><a class="dropdown-item" href="#">Entrantes</a></li>
									<li><a class="dropdown-item" href="#">Primeros</a></li>
									<li><a class="dropdown-item" href="#">Segundos</a></li>
									<li><a class="dropdown-item" href="#">Postres</a></li>
									<li><a class="dropdown-item" href="#">Pescados</a></li>
									<li><a class="dropdown-item" href="#">Carnes</a></li>
									<li><a class="dropdown-item" href="#">Pasta</a></li>
									<li><a class="dropdown-item" href="#">Recetas Especiales</a></li>
								</ul>
							</li>
							<li><a href="{{ url('/cocinamos')}}">Cocinamos</a></li>
							<li><a href="{{ url('/blog')}}">Blog</a></li>
							<li><a href="{{ url('/sobremi')}}">Sobre mi</a></li>
							<li><a href="{{ url('/contacto')}}">Contacto</a></li>		
						</ul>
					</nav>
			</header> --}}

			@yield('contenido')

				<!-- Footer -->

				<footer class="footer">

						<div class="footer_newsletter">
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
								<div class="footer_title">¡Suscríbete para cocinar más!</div>
								<form method="post" action="{{url('newsletter')}}">
									@csrf
									
									<div class="row">
										<div class="col-md-4"></div>
										<div class="newsletter_form">
											<input type="text" class="newsletter-input" placeholder="Correo*" name="email">
											<button type="submit" class="newsletter_button">Suscribirse</button>
										</div>
									</div>
								</form>
								<br><br>
						</div>
				


						<div class="template-demo">
							
							{{-- <ul class="footer_social_list"> --}}
								{{-- <div class="template-demo">  --}}
									<div class="correo-santifoods">santifood11@gmail.com</div>
									<a href="{{ url('/sobremi')}}" class="link-sobremi" style="color: black">
										Sobre mi
									<br><br>
									<button type="button" class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></button> 
								{{-- </div> --}}
								
							{{-- </ul> --}}
						</div>
					
						<div class="footer_copyright">
							<div class="copyright order-md-1 order-2"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script>  SANTIFOODS
							</div>
						</div>
				</footer>
		</div>

		<script src="{{asset('asset/js/jquery-3.2.1.min.js') }}"></script>

			<!-- Scripts -->
			<script src="{{ asset('js/app.js') }}" defer></script>
			<script src="{{ asset('js/all.js') }}" defer></script>
			<script src="{{ asset('/asset/styles/bootstrap-4.1.2/popper.js') }}" defer></script>
		


			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

			
			@yield('scripts')

</div>

</body>
</html>