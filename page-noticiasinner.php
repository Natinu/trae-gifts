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
		<div class="products__grid--category">
			
			<div class="products__grid--category-menu">
				<h3 class="products__grid--title">Blog</h3>
			</div>

		</div>


		<!-- blog -->
		<div class="article container-fluid col-md-12">
			<div class="c col-md-9">
				<div class="article__header">
					<h1 class="entry-title">titulo</h1>
					<p class="entry-meta">fecha 28/89/34</p>
					<div class="entry-content">

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, qui, quae quasi tenetur, vitae quas labore expedita maiores doloribus iste harum, facere. Suscipit atque ad aut ducimus sed, saepe nam.</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, qui, quae quasi tenetur, vitae quas labore expedita maiores doloribus iste harum, facere. Suscipit atque ad aut ducimus sed, saepe nam Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum repellat accusamus dolorem quod quia? Rem tempora quia debitis, temporibus ipsa vel, nemo odio quos ad repellat architecto unde quod voluptas.</p>
						<div class="article__main--image container-fluid">
							<img class="article__main--image-blog" src="<?php echo get_template_directory_uri(); ?>/src/images/article01.png" alt="logo principal">
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, qui, quae quasi tenetur, vitae quas labore expedita maiores doloribus iste harum, facere. Suscipit atque ad aut ducimus sed, saepe nam.</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, qui, quae quasi tenetur, vitae quas labore expedita maiores doloribus iste harum, facere. Suscipit atque ad aut ducimus sed, saepe nam Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum repellat accusamus dolorem quod quia? Rem tempora quia debitis, temporibus ipsa vel, nemo odio quos ad repellat architecto unde quod voluptas.</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, qui, quae quasi tenetur, vitae quas labore expedita maiores doloribus iste harum, facere. Suscipit atque ad aut ducimus sed, saepe nam Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum repellat accusamus dolorem quod quia? Rem tempora quia debitis, temporibus ipsa vel, nemo odio quos ad repellat architecto unde quod voluptas.</p>

						<div class="article__main--image container-fluid">
							<img class="article__main--image-blog" src="<?php echo get_template_directory_uri(); ?>/src/images/article01.png" alt="logo principal">
						</div>

					</div>
				</div>
				


				<!--product pagination-->
				<div class="products__grid--pagination container-fluid">
					<nav aria-label="Products results pages">
						<ul class="pagination pagination-sm">
							<li class="page-item products__grid--pagination-item disabled">
								<a class="page-link" href="#" tabindex="-1">Anterior</a>
							</li>
							<li class="page-item products__grid--pagination-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active products__grid--pagination-item">
								<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
							</li>
							<li class="page-item products__grid--pagination-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item products__grid--pagination-item">
								<a class="page-link" href="#">Siguiente</a>
							</li>
						</ul>
					</nav>
				</div>
			</div> <!-- col-md-9-->


			<div class="article__sidebar col-md-3">
				<ul>
					<!-- Blog Sidebar Item 1 -->
					<div class="article__sidebar col-md-12">
						<li class="article__sidebar--inner">
							
							<div class="article__sidebar--description-container">
								<div class="article__sidebar--description">
									<h4 class="article__sidebar--name">
										Todo lo que necesitas para hacer feliz a tus empreados y clientes
									</h4>
									<p>Has sentido la emoción que surge en los discursos de las premiaciones: las lágrimas,.</p>
									<input class="article__sidebar--input" type="" name="">
									<div class="article__sidebar--readmore">
										<a class="btn traegifts__button" href="#">Suscríbete</a>
									</div>
								</div>
							</div>
						</li>
					</div>

					<!-- Blog Sidebar Item 2 -->
					<div class="article__sidebar col-md-12">
						<li class="article__sidebar--inner">
							
							<div class="article__sidebar--description-container">
								<div class="article__sidebar--description">
									<h4 class="article__sidebar--name">
										Todo lo que necesitas para hacer feliz a tus empreados y clientes
									</h4>
									<p>Has sentido la emoción que surge en los discursos de las premiaciones: las lágrimas,.</p>
									
								</div>
							</div>
						</li>
					</div>

					<!-- Blog Sidebar Item 3 -->
					<div class="article__sidebar col-md-12">
						<li class="article__sidebar--inner">
							
							<div class="article__sidebar--description-container">
								<div class="article__sidebar--description">
									<h4 class="article__sidebar--name">
										Todo lo que necesitas para hacer feliz a tus empreados y clientes
									</h4>
									<p>Has sentido la emoción que surge en los discursos de las premiaciones: las lágrimas,.</p>
									
								</div>
							</div>
						</li>
					</div>
				</ul>
			</div> <!-- col-md-3 -->
			
		</div> <!-- col-md-12 -->

		




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