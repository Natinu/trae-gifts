	<?php get_header()?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Trae Gifts Regalos Corporativos</title>
		<link rel="stylesheet" href="css/app.css"/>
	</head>
	<body>
	<!-- Main Left-->
		<div class="main__left col-md-1">
			<img class="main__left--image" src="<?php echo get_template_directory_uri(); ?>/src/images/logo-trae.png" alt="logo principal">
		</div>
	<!-- Main Right-->
		<div class="main__right col-md-11">
			<!-- NavBar-->
		<nav class="navbar col-md-12 navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<div class="navbar-left col-md-10">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<div class="nav--componente__menu"> </div>
							<a class="nav-link" href="#">Para Empleados <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Para Clientes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Todos los regalos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contacto</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- Header -->
		<div class="header col-md-12">
			<img class="header__image header__image--home" src="<?php echo get_template_directory_uri(); ?>/src/images/header-01.png">
		</div>
		<!-- highlights Sectión -->
		<section class="highlights">
			<h2 class="title__highlights">Productos Destacados</h2>

		<div class="highlights__product">
			<img src="<?php echo get_template_directory_uri(); ?>/src/images/tazon01.png">
			<h5> titulo producto</h5>
			<p>$5990</p>
		</div>


			
		</section>




			

		</div> <!-- End Main Right -->

		
		

	</body>



	</html>





	<?php get_sidebar()?>
	<?php get_header()?>