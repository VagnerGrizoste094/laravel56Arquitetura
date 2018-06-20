@extends('layout.layout')

@section('carousel')
<!-- PAGE HOME -->
<section style="padding-bottom: 0px;" id="home">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
	    @foreach ($carrousel as $key => $name)
		@if($key == 0)
		    <div class="carousel-item active">  			
			<img class="d-block w-100" src="{{ url('/storage/img/'. $carrousel[0]["name"])}}" alt="First slide">
			<div class="carousel-caption" style="bottom: 250px;">
			    <h1 style="color: #80bdff;letter-spacing:0.15em; font-family: 'Serif'; font-size: 64px;">ARQUITETURA SITE EM CONTRUÇÃO</h1>
			</div>
		    </div>
	        @else
		    <div class="carousel-item">  			
			<img class="d-block w-100" src="{{ url('/storage/img/'.$carrousel[$key]["name"])}}" alt="First slide">		
		    </div>
		@endif
	    @endforeach
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	</a>
    </div>
</section>
<!-- END HOME -->
@endsection

@section('navbar')
<!-- NAVBAR HOME -->
<section>
    <nav class="navbar navbar-expand-lg navbar-dark justify-content-center" style="background-color: #6351ce;">	    
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse justify-content-md-center" id="navbarNavDropdown">
	    <div class="container">
		<ul class="navbar-nav nav-pills nav-fill">
		    <li class="nav-item active">
			<a class="nav-link" href="#home">{{$busca or 'HOME'}}<span class="sr-only">(current)</span></a>
		    </li>
		    <li class="nav-item">
			<a class="nav-link" href="#sobre">SOBRE</a>
		    </li>
		    <li class="nav-item">
			<a class="nav-link" href="#portfolio">PORTFÓLIO</a>
		    </li>
		    <li class="nav-item">
			<a class="nav-link" href="#team">EQUIPE</a>
		    </li>
		    <li class="nav-item">
			<a class="nav-link" href="{{route('admin.editarHome')}}">ADMIN</a>
		    </li>
		</ul>
	    </div>
	</div>	
    </nav>
</section>
<!-- ENDNAVBAR HOME -->
@endsection
@section('sobre')
<!-- PAGE SOBRE -->
<section id="sobre" class="mt-5">
    <div class="container-fluid">
	<div id="carouselExampleIndicator" class="carousel slide" data-ride="carousel">
	    <ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	    </ol>
	    <div class="carousel-inner">
		<div class="carousel-item active">
		    <div class="jumbotron jumbotron mb-0 bg-white">
			<div class="container text-center">
			    <span class="fa-stack fa-4x">
				<i class="fa fa-circle fa-stack-2x text-primary"></i>
				<i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
			    </span>
			    <h1 class="section-heading text-uppercase">TEXTO PRINCIPAL</h1>
			    <p class="lead">Para que o visual de uma loja transmita credibilidade, que os consumidores reconheçam e valorizem sua marca onde estiverem e, consequentemente, as vendas aumentem, é importante um bom projeto de ambientação. Sim, a concepção arquitetônica também é essencial para despertar o interesse dos clientes e reforçar a identidade da empresa. Isso é exatamente o que nós fazemos aqui.</p>
			</div>
			<div class="container text-center mt-10">
			    <span class="fa-stack fa-4x">
				<i class="fa fa-circle fa-stack-2x text-primary"></i>
				<i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
			    </span>
			    <h1 class="section-heading text-uppercase">TEXTO PRINCIPAL 2</h1>
			    <p class="lead">Para que o visual de uma loja transmita credibilidade, que os consumidores reconheçam e valorizem sua marca onde estiverem e, consequentemente, as vendas aumentem, é importante um bom projeto de ambientação. Sim, a concepção arquitetônica também é essencial para despertar o interesse dos clientes e reforçar a identidade da empresa. Isso é exatamente o que nós fazemos aqui.</p>
			</div>
		    </div>
		</div>
		<div class="carousel-item">
		    <div class="jumbotron jumbotron mb-0 bg-white">
			<div class="container text-center ">
			    <span class="fa-stack fa-4x">
				<i class="fa fa-circle fa-stack-2x text-primary"></i>
				<i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
			    </span>
			    <h1 class="section-heading text-uppercase">TEXTO SECUNDARIO</h1>
			    <p class="lead">Para que o visual de uma loja transmita credibilidade, que os consumidores reconheçam e valorizem sua marca onde estiverem e, consequentemente, as vendas aumentem, é importante um bom projeto de ambientação. Sim, a concepção arquitetônica também é essencial para despertar o interesse dos clientes e reforçar a identidade da empresa. Isso é exatamente o que nós fazemos aqui.</p>
			</div>
			<div class="container text-center mt-10">
			    <span class="fa-stack fa-4x">
				<i class="fa fa-circle fa-stack-2x text-primary"></i>
				<i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
			    </span>
			    <h1 class="section-heading text-uppercase">TEXTO SECUNDARIO 2</h1>
			    <p class="lead">Para que o visual de uma loja transmita credibilidade, que os consumidores reconheçam e valorizem sua marca onde estiverem e, consequentemente, as vendas aumentem, é importante um bom projeto de ambientação. Sim, a concepção arquitetônica também é essencial para despertar o interesse dos clientes e reforçar a identidade da empresa. Isso é exatamente o que nós fazemos aqui.</p>
			</div>
		    </div>
		</div>
		<div class="carousel-item">
		    <div class="jumbotron jumbotron mb-0 bg-white">
			<div class="container text-center">
			    <span class="fa-stack fa-4x">
				<i class="fa fa-circle fa-stack-2x text-primary"></i>
				<i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
			    </span>
			    <h1 class="section-heading text-uppercase">TEXTO APOIO</h1>
			    <p class="lead">Para que o visual de uma loja transmita credibilidade, que os consumidores reconheçam e valorizem sua marca onde estiverem e, consequentemente, as vendas aumentem, é importante um bom projeto de ambientação. Sim, a concepção arquitetônica também é essencial para despertar o interesse dos clientes e reforçar a identidade da empresa. Isso é exatamente o que nós fazemos aqui.</p>
			</div>
			<div class="container text-center mt-10">
			    <span class="fa-stack fa-4x">
				<i class="fa fa-circle fa-stack-2x text-primary"></i>
				<i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
			    </span>
			    <h1 class="section-heading text-uppercase">TEXTO APOIO 2</h1>
			    <p class="lead">Para que o visual de uma loja transmita credibilidade, que os consumidores reconheçam e valorizem sua marca onde estiverem e, consequentemente, as vendas aumentem, é importante um bom projeto de ambientação. Sim, a concepção arquitetônica também é essencial para despertar o interesse dos clientes e reforçar a identidade da empresa. Isso é exatamente o que nós fazemos aqui.</p>
			</div>
		    </div>
		</div>
	    </div>
	    <a class="carousel-control-prev" href="#carouselExampleIndicator" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	    </a>
	    <a class="carousel-control-next" href="#carouselExampleIndicator" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	    </a>
	</div>	  
    </div>
</section>
<!-- ENDPAGE SOBRE -->
@endsection
@section('portfolio')
<!-- PAGE PORTFÓLIO -->
<section id="portfolio" class="mt-5">
    <div class="container mt-5 text-center">
	<div class="row">
	    <div class="col-lg-12">
		<h1 class="section-heading text-uppercase">PORTFÓLIO</h1>
		<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
	    </div>
	</div>
	<div class="row">
	    <div class="col-lg-12">
		<div class="card-deck text-center">				
		    <div class="card">
			<img class="card-img-top" src="{{ url('storage/img/portfolio-1.jpg')}}" alt="Card image cap">
			<div class="card-body">
			    <h5 class="card-title">Projeto 1</h5>
			    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		    </div>
		    <div class="card">
			<img class="card-img-top " src="{{ url('storage/img/portfolio-2.jpg')}}" alt="Card image cap">
			<div class="card-body">
			    <h5 class="card-title">Projeto 2</h5>
			    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
			    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		    </div>
		    <div class="card">
			<img class="card-img-top " src="{{ url('storage/img/portfolio-3.jpg')}}" alt="Card image cap">
			<div class="card-body">
			    <h5 class="card-title">Projeto 3</h5>
			    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
			    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		    </div>	
		    <div class="w-100 mt-4"></div>
		    <div class="card">
			<img class="card-img-top " src="{{ url('storage/img/portfolio-4.jpg')}}" alt="Card image cap">
			<div class="card-body">
			    <h5 class="card-title">Projeto 4</h5>
			    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
			    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		    </div>
		    <div class="card">
			<img class="card-img-top" src="{{ url('storage/img/portfolio-1.jpg')}}" alt="Card image cap">
			<div class="card-body">
			    <h5 class="card-title">Projeto 5</h5>
			    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		    </div>
		    <div class="card">
			<img class="card-img-top " src="{{ url('storage/img/portfolio-6.jpg')}}" alt="Card image cap">
			<div class="card-body">
			    <h5 class="card-title">Projeto 6</h5>
			    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
			    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		    </div>						
		</div>
	    </div>
	</div>
    </div>
</section>
<!-- ENDPAGE PORTFÓLIO -->
@endsection
@section('team')
<!-- PAGE TEAM -->
<section class="bg-white" id="team">
    <div class="container">
	<div class="row">
	    <div class="col-lg-12 text-center">
		<h1 class="section-heading text-uppercase">Nossa Equipe</h1>
		<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
	    </div>
	</div>
	<div class="row">
	    <div class="col-sm-4">
		<div class="team-member">
		    <img class="mx-auto rounded-circle" src="{{ url('storage/img/team-1.jpg')}}" alt="">
		    <h4>Funcionário Um</h4>
		    <p class="text-muted">Arquiteto</p>
		    <ul class="list-inline social-buttons">
			<li class="list-inline-item">
			    <a href="#">
				<i class="fa fa-twitter"></i>
			    </a>
			</li>
			<li class="list-inline-item">
			    <a href="#">
				<i class="fa fa-facebook"></i>
			    </a>
			</li>
			<li class="list-inline-item">
			    <a href="#">
				<i class="fa fa-linkedin"></i>
			    </a>
			</li>
		    </ul>
		</div>
	    </div>
	    <div class="col-sm-4">
		<div class="team-member">
		    <img class="mx-auto rounded-circle" src="{{ url('storage/img/team-2.jpg')}}" alt="">
		    <h4>Funcionário Dois</h4>
		    <p class="text-muted">Designer de Interiores</p>
		    <ul class="list-inline social-buttons">
			<li class="list-inline-item">
			    <a href="#">
				<i class="fa fa-twitter"></i>
			    </a>
			</li>
			<li class="list-inline-item">
			    <a href="#">
				<i class="fa fa-facebook"></i>
			    </a>
			</li>
			<li class="list-inline-item">
			    <a href="#">
				<i class="fa fa-linkedin"></i>
			    </a>
			</li>
		    </ul>
		</div>
	    </div>
	    <div class="col-sm-4">
		<div class="team-member">
		    <img class="mx-auto rounded-circle" src="{{ url('storage/img/team-3.jpg')}}" alt="">
		    <h4>Funcionário Três</h4>
		    <p class="text-muted">Designer de Exteriores</p>
		    <ul class="list-inline social-buttons">
			<li class="list-inline-item">
			    <a href="#">
				<i class="fa fa-twitter"></i>
			    </a>
			</li>
			<li class="list-inline-item">
			    <a href="#">
				<i class="fa fa-facebook"></i>
			    </a>
			</li>
			<li class="list-inline-item">
			    <a href="#">
				<i class="fa fa-linkedin"></i>
			    </a>
			</li>
		    </ul>
		</div>
	    </div>
	</div>
	<div class="row">
	    <div class="col-lg-8 mx-auto mt-4 text-center">
		<p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
	    </div>
	</div>
    </div>
</section>
<!-- ENDPAGE TEAM -->
@endsection
@section('scripts')
<script src="{{asset('js/app.js')}}"></script>
@endsection