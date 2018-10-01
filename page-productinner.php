<?php get_header()?>

<!-- Main Left-->
<div class="main__left col-md-1">
	<img class="main__left--image" src="<?php echo get_template_directory_uri(); ?>/src/images/logotraegifts.png" alt="logo principal">
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
					<li class="nav-item ">
						<div class="nav--componente__menu"> </div>
						<a class="nav-link" href="#">Regalos para Empleados <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="#">Regalos para Clientes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Todos los regalos</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contacto</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- article Grid -->
	<div class="products__grid container-fluid">

		<!-- article Title -->
		


		<!-- Product Inner -->
		<div class="productinner col-md-12">
			<div class="col-md-8">
				<div class="productinner__container container-fluid col-md-12">
							<img class="productinner__container--image" src="<?php echo get_template_directory_uri(); ?>/src/images/article02.png" alt="logo principal">
				</div>
				<div class="productinner__container--thumbanails container-fluid">
					<a href="#">
							<img class="productinner__container--thumbanails-image" src="<?php echo get_template_directory_uri(); ?>/src/images/article02.png" alt="logo principal">
					</a>
					<a href="#">
							<img class="productinner__container--thumbanails-image" src="<?php echo get_template_directory_uri(); ?>/src/images/article02.png" alt="logo principal">
					</a>
				</div>

				
			</div>
			<div class="col-md-4">
				<div class="productinner__container--description">
				<h3 class="productinner__container--title products__grid--title">Nombre producto</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur repellendus sit maiores quisquam voluptates nulla modi eum laborum distinctio magni eaque nesciunt impedit iusto at asperiores, culpa laboriosam deleniti recusandae!</p>
				<div class="productinner__container--price products__grid--price ">
					<p>$5990</p>
				</div>
				<div class=" productinner__container--button bloghome__article--readmore">
					<a class="btn productinner__container--button-cotizar traegifts__button" href="#">Cotizar</a>
				</div>
				</div>
				
			</div>
		</div>
		
		<hr>
		

		<!-- Opinions -->
		<div class="opinion col-md-12">
			<div class="row">
				<!-- Opinion 1 -->
				<div class="col-md-4">
					<div class="opinion__inner">
						<i class="opinion__inner--star fas fa-star"></i>
						<i class="opinion__inner--star fas fa-star"></i>
						<i class="opinion__inner--star fas fa-star"></i>
						<i class="opinion__inner--star fas fa-star"></i>
						<i class="opinion__inner--star fas fa-star"></i>
						<h4>Gran producto</h4>
						<p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, maxime a? Nobis corporis atque, quae laudantium accusamus </p>
						<h5>Nataly Medina</h5>
					</div>
				</div>

				<!-- Opinion 2 -->
				<div class="col-md-4">
					<div class="opinion__inner">
						<i class="opinion__inner--star fas fa-star"></i>
						<i class="opinion__inner--star fas fa-star"></i>
						<i class="opinion__inner--star fas fa-star"></i>
						<i class="opinion__inner--star fas fa-star"></i>
						<i class="opinion__inner--star fas fa-star"></i>
						<h4>Gran producto</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, maxime a? Nobis corporis atque, quae laudantium accusamus </p>
						<h5>Nataly Medina</h5>
					</div>
				</div>

				<!-- Opinion 3 -->
				<div class="col-md-4">
					<div class="opinion__inner">
						<i class="opinion__inner--star fas fa-star"></i>
						<i class="opinion__inner--star fas fa-star"></i>
						<i class="opinion__inner--star fas fa-star"></i>
						<i class="opinion__inner--star fas fa-star"></i>
						<i class="opinion__inner--star fas fa-star"></i>
						<h4>Gran producto</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, maxime a? Nobis corporis atque, quae laudantium accusamus n</p>
						<h5>Nataly Medina</h5>
					</div>
				</div>
			</div>
		</div>



		<?php get_footer()?>
	</div><!-- Main Right -->

</body>
</html>
<?php get_sidebar()?>
<?php get_header()?>