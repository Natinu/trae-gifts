		<?php get_header()?>

		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			<title>Trae Gifts Regalos Corporativos</title>
			<link rel="stylesheet" href="css/app.css"/>
			<link href="https://fonts.googleapis.com/css?family=Abel|Dosis:400,500,600,700|Hind:700|Lobster" rel="stylesheet">


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
						<div class="navbar-left col-md-9">
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
				<!-- Products Grid -->
				<div class="products__grid container-fluid">
					<!-- Products title -->
					<div class="products__grid--category">
						<h3 class="products__grid--title">Productos Destacados</h3>
					</div>

					<!-- Products List-->
					<div class="row">
						<div class="col-md-12">
							<ul class="products__grid--list">

								<!-- Item 1 -->
								<div class="col-md-3 products__grid--item ">
									<li class="products__grid--item">
										<a href="" title="Mug happy" class="products__grid--link">
											<img class="products__grid--image" src="<?php echo get_template_directory_uri(); ?>/src/images/tazon01.png" alt="Mug diseño happy">
										</a>
										<div class="products__grid--info">
											<h2 class="products__grid--name">
												<a href="" title="Mug happy"> Mug happy smile, para tu café de la mañana </a>
											</h2>
										</div>
										<div class="products__grid--price">
											<p>$5990</p>
										</div>
									</li>
								</div>

								<!-- Item 2 -->
								<div class="col-md-3 products__grid--item">
									<div class="col-md-3">
									<li class="products__grid--item ">
										<a href="" title="Mug happy" class="products__grid--link">
											<img class="products__grid--image" src="<?php echo get_template_directory_uri(); ?>/src/images/tazon01.png" alt="Mug diseño happy">
										</a>
										<div class="products__grid--info">
											<h2 class="products__grid--name">
												<a href="" title="Mug happy"> Mug happy smile, para tu café de la mañana </a>
											</h2>
										</div>
										<div class="products__grid--price">
											<p>$5990</p>
										</div>
									</li>
								</div>

								<!-- Item 3 -->
								<div class="col-md-3 products__grid--item">
									<div class="col-md-3">
									<li class="products__grid--item ">
										<a href="" title="Mug happy" class="products__grid--link">
											<img class="products__grid--image" src="<?php echo get_template_directory_uri(); ?>/src/images/tazon01.png" alt="Mug diseño happy">
										</a>
										<div class="products__grid--info">
											<h2 class="products__grid--name">
												<a href="" title="Mug happy"> Mug happy smile, para tu café de la mañana </a>
											</h2>
										</div>
										<div class="products__grid--price">
											<p>$5990</p>
										</div>
									</li>
								</div>

								<!-- Item 4 -->
								<div class="col-md-3 products__grid--item">
									<div class="col-md-3">
									<li class="products__grid--item ">
										<a href="" title="Mug happy" class="products__grid--link">
											<img class="products__grid--image" src="<?php echo get_template_directory_uri(); ?>/src/images/tazon01.png" alt="Mug diseño happy">
										</a>
										<div class="products__grid--info">
											<h2 class="products__grid--name">
												<a href="" title="Mug happy"> Mug happy smile, para tu café de la mañana </a>
											</h2>
										</div>
										<div class="products__grid--price">
											<p>$5990</p>
										</div>
									</li>
								</div><!-- item4 -->
								
							</ul>
						</div><!-- col-md-12-->
					</div><!--row-->
				</div><!--product grid-->
			</div><!-- main right -->


		</body>



		</html>





		<?php get_sidebar()?>
		<?php get_header()?>