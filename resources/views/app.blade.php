<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edu - Logic</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
	a{
		font-size: 17px;
	}
		.nav_item{
			padding: 10px;
			
		}
		#log{
			margin-top: 10px;
			font-size: 25px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#" id="log">EDU-LABS</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Ingresar</a></li>
					
					@else

						@if(Auth::user()->perfil==6)

							<li class="nav_item" class="dropdown">
								<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanden="false">Almacenamiento <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="{{url('c_stor')}}">Cliente</a></li>
									<li><a href="">Proveedor</a></li>
									<li><a href="">Zonas y Bodegas</a></li>
								</ul>
							</li>
						
							<li class="nav_item" class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanden="false" >Formularios <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="">Aduaneros</a></li>
									<li><a href="">Aereos</a></li>
									<li><a href="">Terrestres</a></li>
									<li><a href="">Maritimos</a></li>
									<li><a href="">Ley 16.754()Prestamos del estado a una empresa</a></li>
									<li><a href="">Oguc(Orgamismo de Urbanismo y Construccion)</a></li>
									<li><a href="">Formatos de ctos Conductores</a></li>
								</ul>
							</li>
							<li class="nav_item" class="dropdown">
								<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bodega <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="">Banco de Datos</a></li>
									<li><a href="">Aprovisionamiento</a></li>
									<li><a href="">Cadena de Produccion</a></li>
									<li><a href="">Distribuicion y Transporte</a></li>
									<li><a href="">Normas de Seguridad</a></li>
								</ul>

							</li>
							<li class="nav_item" ><a href="">Ejercicios</a></li>
							<li  class="dropdown nav_item">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrador <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li> <a href="admin/create">Ingreso Personal</a></li>
									<li><a href="{{url('addStorage')}}">Crear Bodegas</a></li>
									<li><a href="{{ url('/auth/logout') }}">Salir</a></li>
								</ul>
							</li>
						
						@elseif(Auth::user()->perfil==4)

							<li class="dropdown">
								<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bodega <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="">Banco de Datos</a></li>
									<li><a href="">Aprovisionamiento</a></li>
									<li><a href="">Cadena de Produccion</a></li>
									<li><a href="">Distribuicion y Transporte</a></li>
									<li><a href="">Normas de Seguridad</a></li>
								</ul>

							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanden="false" >Formularios <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="">Aduaneros</a></li>
									<li><a href="">Aereos</a></li>
									<li><a href="">Terrestres</a></li>
									<li><a href="">Maritimos</a></li>
									<li><a href="">Ley 16.754()Prestamos del estado a una empresa</a></li>
									<li><a href="">Oguc(Orgamismo de Urbanismo y Construccion)</a></li>
									<li><a href="">Formatos de ctos Conductores</a></li>
								</ul>
							</li>
							<li><a href="">Banco de Datos</a></li>
							<li><a href="">Eejercicios</a></li>
	
						@elseif(Auth::user()->perfil==2)

							<li><a href="">Agendar Cita</a></li>
							<li><a href="">Movimiento Producto</a></li>
							<li><a href="">Consultar Stock</a></li>

						@endif
				<!--		<li class="dropdown nav_item">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Salir</a></li> -->
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')


	<!-- Scripts -->


</body>
</html>
