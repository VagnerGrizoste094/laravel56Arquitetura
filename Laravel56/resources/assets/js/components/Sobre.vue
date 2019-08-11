<template>
   <section id="sobre" class="mt-5">
    <div class="container-fluid">
    <div id="carouselExampleIndicator" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">    
            <template v-for="(value, index) in textoslide">
                <div :class="{ 'carousel-item active': index === 0, 'carousel-item': index !== 0 }">
                    <div class="jumbotron jumbotron mb-0 bg-white">
                    <div class="container text-center">
                        <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h1 class="section-heading text-uppercase">{{ textoslide[index]['titulo'] }}</h1>
                        <p class="lead">{{ textoslide[index]['descricao'] }}</p>
                    </div>
                
                    <div class="container text-center mt-10">
                        <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h1 class="section-heading text-uppercase">{{ textoslide[index]['titulo'] }}</h1>
                        <p class="lead">{{ textoslide[index]['descricao'] }}</p>
                    </div>
                    </div>
                </div>   
            </template>   
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicator" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicator" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>    
    </div>
</section>
</template>

<script>
    export default {
       props: ['textoslide']
   }
</script>
