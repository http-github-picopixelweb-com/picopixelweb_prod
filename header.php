<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

    <title>

        <?php 

        if( is_home() ){

            echo get_bloginfo('name');

        } else if ( is_single() ){

            echo the_title();

         } else {echo get_bloginfo('name');}

        

        ?>

</title>

         <?php wp_head(); ?>

	<meta name="viewport" content="width=device-width, user-scalable=no,

	 initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	 

	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/js/jquery-fadeintoview.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<!-- <link rel="stylesheet" href="css/bootstrap-theme.min.css"> -->

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Poppins" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">

	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/estilos.css">

	<link href="https://fonts.googleapis.com/css?family=Diplomata+SC" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">



	<!-- links para galeria-->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css"/>

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Righteous&display=swap" rel="stylesheet">



</head>

<body>

            <header>

                <nav class="navbar navbar-expand-lg fixed-top " id="navbar1">

                    <div class="container ">

                        

                        <div class="cotenedor-logo">

                            <div class="PP d-inline-block p-0 m-0">

                                <a href="#<?php bloginfo('url');?>/" class="navbar-brand tituloLogo"><!-- <img src="img/logobt3.jpg" class="logo" alt=""> -->

                                    Pico Pixel <strong>Web</strong> </a>

                            </div>



                            

                            <button class="navbar-toggler" type="button" style="color:#fff;" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Menu de Navegacion">

                                <span class="navbar-toggler-icon" style="color:#fff;" ></span>

                            </button>

                        </div>



                        <div class="collapse navbar-collapse f-left" id="navbar">

                            <ul class="navbar-nav mr-auto" style="color:#fff;">

                                <li class="nav-item" style="color:#fff;">

                                    <a href="<?php bloginfo('url');?>/" class="nav-link">Inicio</a>

                                </li>

                                <li class="nav-item" style="color:#fff;">

                                    <a href="#" class="nav-link" id="btn-quienes-somos">Quienes Somos</a>

                                </li>

                                <li class="nav-item" style="color:#fff;">

                                    <a href="#" id="btn-consulta" class="nav-link">Consultas</a>

                                </li>

                            </ul>

                        </div>





                    </div>

                </nav>

            </header>