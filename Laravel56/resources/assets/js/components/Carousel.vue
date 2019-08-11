<template>
	<div style="padding-bottom: 0px;" id="home">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>

	<div class="carousel-inner">
		    <template v-for="(value, index) in carousels"> 
			    <div v-if="index == '0'" class="carousel-item active"> 			
					<img class="d-block w-100" :src="'storage/img/'+value['name']" alt="First slide">
					<div class="carousel-caption" style="bottom: 250px;">
				    	<h1 style="color: #80bdff;letter-spacing:0.15em; font-family: 'Serif'; font-size: 64px;">ARQUITETURA SITE EM CONTRUÇÃO</h1>
					</div>
			    </div>
			    <div v-else class="carousel-item">  			
					<img class="d-block w-100" :src="'storage/img/'+value['name']" alt="First slide">		
			    </div>
		   	</template>
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
</div>
</template>

<script type="text/javascript">
	
	export default {
       props: ['carousels']
    }

</script>
