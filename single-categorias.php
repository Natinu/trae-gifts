<?php 
/*
	Template Name: categorias
*/
	?>


	<?php get_header() ?>
	prueba
	<!-- article Grid -->
	<!-- article title -->

	<div class="products__grid--category">
		<div class="products__grid--category-menu">
			<h3 class="products__grid--title"><?php the_title() ?></h3>
		</div>
	</div>

	<!-- article -->
	<!-- blog -->
	<div class="productinner col-md-12">
		<div class="productinner__container--thumbanails container-fluid col-sm-2 col-md-2">
			<div class="row">

				<a class="productinner__container--thumbanails-link container-fluid" href="#">
					<li class="carousel__images" data-target="#carouselExampleIndicators" data-slide-to="0">
						<?php $image = get_field('imagen-regalo'); ?>
						<img class="productinner__container--thumbanails-image" src="<?php echo $image['url']; ?>" 
						alt="<?php echo $image['alt']; ?>" />

					</li>
					<li class="carousel__images" data-target="#carouselExampleIndicators" data-slide-to="1">
						<?php $image = get_field('imagen-regalo01'); ?>
						<img class="productinner__container--thumbanails-image" src="<?php echo $image['url']; ?>" 
						alt="<?php echo $image['alt']; ?>" />

					</li>
					<li class="carousel__images" data-target="#carouselExampleIndicators" data-slide-to="2">
						<?php $image = get_field('imagen-regalo02'); ?>
						<img class="productinner__container--thumbanails-image" src="<?php echo $image['url']; ?>" 
						alt="<?php echo $image['alt']; ?>" />

					</li>
				</a>

			</div>
		</div>

		<!-- Slider Regalos -->
		<div class="col-sm-10 col-md-6">
			<div class="article__header">
				<div class="entry-content">
					<?php if ( have_posts() ) { ?>
						<?php while ( have_posts() ) { ?>
							<?php the_post(); ?>

							<div class="productinner__container container-fluid col-md-12">

								<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

									<div class="carousel-inner">
										<div class="carousel-item active">
											<?php $image = get_field('imagen-regalo'); ?>
											<img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="First slide">
											

										</div>
										<div class="carousel-item">
											<?php $image = get_field('imagen-regalo01'); ?>
											<img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="Second slide"> 
										</div>
										<div class="carousel-item">
											<?php $image = get_field('imagen-regalo02'); ?>
											<img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="Third slide">
										
										</div>
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

						<?php } ?>
					<?php } else { ?>
					<?php } wp_reset_query(); ?>

					<hr>

				</div> <!-- entry content -->
			</div> <!-- article header -->
		</div> <!-- col-md-8-->

		<!-- columna publicidad  -->
		<div class="blogmain__sidebar col-sm-12 col-md-4">
			<div class="productinner__container--description">
				<h3 class="productinner__container--title products__grid--title"><?php the_title() ?></h3>
				<p><?php the_content() ?></p>
				<div class="productinner__container--price products__grid--price ">
					<p><?php echo get_field('precio'); ?></p>
				</div>
				<div class=" productinner__container--button bloghome__article--readmore">
					<a class="btn productinner__container--button-cotizar traegifts__button" href="#">Cotizar</a>
				</div>
			</div>
		</div> <!-- col-md-3 -->
	</div> <!-- col-md-12 -->


	<?php get_footer()?>
</div><!-- Main Right -->
<?php get_sidebar()?>
</body>
</html>