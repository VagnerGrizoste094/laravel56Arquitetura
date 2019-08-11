<template>
    <nav class="navbar navbar-expand-lg navbar-dark justify-content-center" style="background-color: #6351ce;">     
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-md-center" id="navbarNavDropdown">
        <div class="container">
        <ul class="navbar-nav nav-pills nav-fill">
            <li class="nav-item active">
            <a class="nav-link" href="#home">HOME<span class="sr-only">(current)</span></a>
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
            <a class="nav-link" :href="admin">ADMIN</a>
            </li>
        </ul>
        </div>
    </div>  
    </nav>

</template>

<script>
   export default {
    props: ['admin']
   }
</script>
