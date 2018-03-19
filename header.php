<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo wp_title(); ?>
    </title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">       
    <?php 
        //Chamada de estrutura head do wordpress - 
        // necessario chamar footer no arquivo footer.php 
        wp_head();     
    ?>    
</head>
<body>               
    <div class="header">
        <div class="container">
            <div id="logo-container"> 
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-header.png" alt="Curitiba Turismo">
            </div>
            <div id="carouselControls" class="carousel slide" data-ride="carousel">        
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid carouselImages" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-header1.png" alt="Los Angeles 1">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid carouselImages" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-header1.png" alt="Los Angeles 2">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid carouselImages" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-header1.png" alt="Los Angeles 3">
                    </div> 
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>               
                </div>
            </div>
            <div class="header-nav-top-fix">
                <nav id="navbar" class="navbar navbar-expand-lg nav-hidden">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">=</span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarToggler">
                        <ul class="nav justify-content-center">
                            <li class="nav-link">                        
                                <a class="nav-link active" href="#">                           
                                    Pontos Turísticos
                                </a>                        
                            </li>
                            <li class="nav-link">                        
                                <a class="nav-link active" href="#">                           
                                Roteiros
                                </a>                        
                            </li>
                            <li class="nav-link">                        
                                <a class="nav-link active" href="#">                           
                                    Arredores
                                </a>                        
                            </li>
                        </ul>
                    </div>
                </nav>            
            </div>
            <div class="wrap">            
                <div class="menu"> 
                    <div class="menubox"> 
                        <a href="#">
                            <div class="menubox-item">                        
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-icon-pontos-turisticos.png" alt="Pontos Turísticos">
                            </div>
                        </a>
                        <a href="##">
                            <div class="menubox-item">                        
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-icon-roteiros-prontos.png" alt="Pontos Turísticos">
                            </div>
                        </a>                
                        <a href="###">
                            <div class="menubox-item">                        
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-icon-arredores-curitiba.png" alt="Pontos Turísticos">
                            </div>
                        </a>                
                        <a href="####">
                            <div class="menubox-item">                        
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-icon-restaurantes-cafes.png" alt="Pontos Turísticos">
                            </div>
                        </a> 
                        <a href="#####">
                            <div class="menubox-item">                        
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-icon-bares-baladas.png" alt="Pontos Turísticos">
                            </div>
                        </a> 
                        <a href="######">
                            <div class="menubox-item">                        
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-icon-hospedagem.png" alt="Pontos Turísticos">
                            </div>
                        </a> 
                        <a href="#######">
                            <div class="menubox-item">                        
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-icon-noticias-eventos.png" alt="Pontos Turísticos">
                            </div>
                        </a> 
                    </div>
                </div>    
            </div>
            <div class="header-gradient">                
            </div>                
        </div> 
    </div>
    <div class="roteiros-container">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <div class="ponto-turisticos-container">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <div class="onde-comer-container">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <script>
        window.onscroll = function() {myFunction()};

        var navbar = document.getElementById("navbar");
        
        var sticky = navbar.offsetTop;

        function myFunction() 
        {            
        if (window.pageYOffset >= 580) {
            navbar.classList.add("sticky")
            navbar.classList.remove("nav-hidden");
        } else {
            navbar.classList.remove("sticky");
            navbar.classList.add("nav-hidden")
        }
        }
    </script>