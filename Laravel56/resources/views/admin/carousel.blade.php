<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/website.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">	
        <title>Hello, world!</title>
    </head>
    <body class="bg-roxo">
	<div id="app">
	    <!-- NAVBAR HOME -->
	    <section id="menu">
		<nav class="navbar navbar-expand-lg navbar-expand-md navbar-dark sticky-top  flex-md-nowrap p-2 justify-content-center">
		    <a class="navbar-brand col-md-2 col-sm-3 mr-0" href="#">Painel Admin</a>	
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="container-fluid d-flex flex-row-reverse">
			<ul class="navbar-nav collapse flex-row pr-5 d-md-flex" id="navbarNavDropdown">
			    <li class="dropdown pr-5">
				<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Admin<b class="fa fa-angle-down"></b></a>
				<ul class="dropdown-menu">
				    <li><a href="#"><i class="fa fa-fw fa-user"></i> Editar Perfil</a></li>
				    <li><a href="#"><i class="fa fa-fw fa-cog"></i> Mudar Senha</a></li>
				    <li class="divider"></li>
				    <li><a href="{{route('sair')}}"><i class="fa fa-fw fa-power-off"></i> Sair</a></li>
				</ul>
			    </li>        
			    <li class="nav-item text-nowrap">	    
				<a class="nav-link" href="{{route('sair')}}">Sair</a>
			    </li>
			</ul>
		    </div>
		</nav>
		<div class="container-fluid" style="height: 100%;">
		    <div class="row">
			<nav class="col-md-1 d-none d-md-block bg-roxo sidebar" style="height: 700px">
			    <div class="sidebar-sticky">
				<ul class="nav flex-column pt-2 text-white">				    			    
				    <li class="nav-item">
					<a class="nav-link active" href="{{route('carousel.index')}}">					
					    <h5 style="font-size: 16px;">Carousel</h5><span class="sr-only">(current)</span>
					</a>
				    </li>
				    <li class="nav-item">
					<a class="nav-link" href="{{route('textoSlide.index')}}">
					    <h5 style="font-size: 16px;">TextoSlide</h5>
					</a>
				    </li>
				    <li class="nav-item">
					<a class="nav-link" href="{{route('sobre.index')}}">
					    <h5 style="font-size: 16px;">Sobre</h5>
					</a>
				    </li> 
				    <li class="nav-item">
					<a class="nav-link" href="{{route('portfolio.index')}}">
					    <h5 style="font-size: 16px;">Portfólio</h5>
					</a>
				    </li>
				    <li class="nav-item">
					<a class="nav-link" href="{{route('team.index')}}">
					    <h5 style="font-size: 16px;">Team</h5>
					</a>
				    </li>
				     <li class="nav-item">
					<a class="nav-link" href="{{route('rodape.index')}}">
					    <h5 style="font-size: 16px;">Rodapé</h5>
					</a>
				    </li>
				</ul>
			    </div>
			</nav>
			@if(!isset($url))
			    @yield('menu')
			@elseif ($url == '/admin/carousel')
			    @yield('menu')
			@elseif($url == '/admin/textoSlide')
			    @yield('textoslide')
			@elseif($url == '/admin/sobre')
			    @yield('sobre')
			@elseif($url == '/admin/portfolio')
			    @yield('portfolio')
			@elseif($url == '/admin/team')
			    @yield('team')
			@elseif($url == '/admin/rodape')
			    @yield('rodape')		
			@endif
		    </div>
		</div>	
	    </section>
	    <!-- ENDNAVBAR HOME -->
	</div>
	<script src="{{asset('js/app.js')}}"></script>
    </body>
</html>