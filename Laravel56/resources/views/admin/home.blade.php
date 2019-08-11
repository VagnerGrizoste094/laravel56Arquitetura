@extends('admin.carousel')

@section('menu')		
<main role="main" class="col-md-10 ml-sm-auto col-lg-11 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Página Carousel</h1>	
    </div> 
    <form method="post" enctype="multipart/form-data" action="{{route('carousel.store')}}">
	{{ csrf_field() }} 
	<div class="form-group">	    
	    <label for="exampleInputEmail1">Texto da Imagem Principal</label>
	    <input class="form-control" type="text" placeholder="Default input">
	    <small id="textoimg" class="form-text text-muted"></small>
	</div>
	<div class="form-group">
	    <label for="exampleFormControlFile1">Imagem 1</label>
	    <input type="file" name="imagem1" class="form-control-file" id="imagem">
	</div>
	<div class="form-check">
	    <input type="checkbox" class="form-check-input" id="check1">
	    <label class="form-check-label" for="exampleCheck1">Ativo ?</label>
	</div>
	<div class="form-group">
	    <label for="exampleFormControlFile1">Imagem 2</label>
	    <input type="file" name="imagem2" class="form-control-file" id="imagem">
	</div>
	<div class="form-check">
	    <input type="checkbox" class="form-check-input" id="check2">
	    <label class="form-check-label" for="exampleCheck1">Ativo ?</label>
	</div>
	<div class="form-group">
	    <label for="exampleFormControlFile1">Imagem 3</label>
	    <input type="file" name="imagem3" class="form-control-file" id="imagem">
	</div>
	<div class="form-check">
	    <input type="checkbox" class="form-check-input" id="check3">
	    <label class="form-check-label" for="exampleCheck1">Ativo ?</label>
	</div>
	<button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>   
</main>
@endsection

@section('textoslide')
<main role="main" class="col-md-10 ml-sm-auto col-lg-11 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Página TextoSlide</h1>	
    </div>
    <h2>Editar</h2>
    <form class="form-group" method="post" action="{{route('textoSlide.store')}}">                                   
	{{ csrf_field() }}  
	<div class="form-group">	    
	    <label for="exampleInputEmail1">Título da Imagem 1</label>
	    <input class="form-control" name="titulo" type="text" placeholder="Default input">
	    <small class="form-text text-muted"></small>
	</div>
	<div class="form-group">	    
	    <label for="exampleInputEmail1">Texto da Imagem 1</label>
	    <textarea class="form-control" name="descricao" type="text" placeholder="Default input"></textarea>
	    <small class="form-text text-muted"></small>
	</div>
	<button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
    <form class="form-group" method="post" action="{{route('textoSlide.store')}}">
	{{ csrf_field() }}  
	<div class="form-group">	    
	    <label for="exampleInputEmail1">Título da Imagem 2</label>
	    <input class="form-control" name="titulo" type="text" placeholder="Default input">
	    <small class="form-text text-muted"></small>
	</div>
	<div class="form-group">	    
	    <label for="exampleInputEmail1">Texto da Imagem 2</label>
	    <textarea class="form-control" name="descricao" type="text" placeholder="Default input"></textarea>
	    <small class="form-text text-muted"></small>
	</div>
	<button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>			    
</main>
@endsection


@section('sobre')		
<main role="main" class="col-md-10 ml-sm-auto col-lg-11 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Página Sobre</h1>	
    </div>
    <h2>Editar</h2>
    <form class="form-group" method="post" action="#">                                   
	{{ csrf_field() }}  
	<input type="text" name="texto_home" 
	       class="form-control input-sm pull-left" 
	       placeholder="Pesquisar por nome..." required> 
	<button class="btn btn-default btn-sm pull-right" id="color">Editar</button>
    </form>			    
</main>
@endsection

@section('portfolio')
<main role="main" class="col-md-10 ml-sm-auto col-lg-11 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Página Portfólio</h1>	
    </div>
    <h2>Editar</h2>
    <form class="form-group" method="post" action="#">                                   
	{{ csrf_field() }}  
	<input type="text" name="texto_home" 
	       class="form-control input-sm pull-left" 
	       placeholder="Pesquisar por nome..." required> 
	<button class="btn btn-default btn-sm pull-right" id="color">Editar</button>
	<input type="text" name="texto_home" 
	       class="form-control input-sm pull-left" 
	       placeholder="Pesquisar por nome..." required> 
	<button class="btn btn-default btn-sm pull-right" id="color">Editar</button>
    </form>			    
</main>
@endsection

@section('team')		
<main role="main" class="col-md-10 ml-sm-auto col-lg-11 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Página Team</h1>	
    </div>
    <h2>Editar</h2>
    <form class="form-group" method="post" action="#">                                   
	{{ csrf_field() }}  
	<input type="text" name="texto_home" 
	       class="form-control input-sm pull-left" 
	       placeholder="Pesquisar por nome..." required> 
	<button class="btn btn-default btn-sm pull-right" id="color">Editar</button>
    </form>			    
</main>
@endsection

@section('rodape')
<main role="main" class="col-md-10 ml-sm-auto col-lg-11 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Página Rodapé</h1>	
    </div>
    <h2>Editar</h2>
    <form class="form-group" method="post" action="#">                                   
	{{ csrf_field() }}  
	<input type="text" name="texto_home" 
	       class="form-control input-sm pull-left" 
	       placeholder="Pesquisar por nome..." required> 
	<button class="btn btn-default btn-sm pull-right" id="color">Editar</button>
	<input type="text" name="texto_home" 
	       class="form-control input-sm pull-left" 
	       placeholder="Pesquisar por nome..." required> 
	<button class="btn btn-default btn-sm pull-right" id="color">Editar</button>
    </form>			    
</main>
@endsection