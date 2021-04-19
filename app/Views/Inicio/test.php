
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/test.css">
</head> 
<body id="home">
<nav class="navbar navbar-expand-lg navbar-light">
	<a class="navbar-brand" href="<?= base_url()?>/inicio">pet<b>SOS</b></a>  		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start" >
		<div class="navbar-nav">
			<a href="<?= base_url()?>/inicio" class="nav-item nav-link">Inicio</a>
			<a href="<?= base_url()?>/galeria" class="nav-item nav-link">Galeria</a>			
			
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" >
				Adopcion
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="<?= base_url() ?>/Mascotas/viewMascota/2">Caninos</a>
				<a class="dropdown-item" href="<?= base_url() ?>/Mascotas/viewMascota/1">Felinos</a>
				</div>
          	</li>
			<a href="<?= base_url()?>/blog" class="nav-item nav-link active">Blog</a>
			<a href="<?= base_url()?>/contacto" class="nav-item nav-link">Contacto</a>
        </div>		
	</div>
	<div class="navbar-nav ml-auto">
			<form class="form-inline" action="#" method="post">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
			<?php
			if(session('nombre')!=null && session('apellido')!=null): ?>
			<a href="<?= base_url()?>/perfil" class="nav-item nav-link"> <img src="<?= base_url() ?>/assets/img/<?= session('imagen') ?> " ></a>
           	<a href="<?= base_url()?>/perfil" class="nav-item nav-link">
			   <?php
			   		echo session('nombre').' ';
					echo session('apellido');
			   ?>
			</a>
			<a href="<?= base_url()?>/salir" class="nav-item nav-link">Salir</a>
			<?php else:?>
			<a href="<?= base_url()?>/login" class="nav-item nav-link">Login</a>
			<?php endif;?>
	</div>
</nav>