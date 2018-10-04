
<?php /* Template Name: front-page */ ?>


<?php get_header()?>	

	<!-- Header -->
	<div class="header col-md-12">
		<?php $image = get_field('imagen-header'); ?>
		<img class="header__image header__image--home" src="<?php echo $image['url']; ?>" 
		alt="<?php echo $image['alt']; ?>" />
	</div>
	</div>

	<?php get_template_part('_includes/iOS', 'productosdestacados') ?>
	[ngg src="galleries" display="basic_thumbnail"]


	<!--Blog Home-->
	<div class="bloghome container-fluid">

		<!-- Bloghome Title -->
		<div class="bloghome__name">
			<h3 class="bloghome__name--title">Blog</h3>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php // Display blog posts on any page @ https://m0n.co/l
			$temp = $wp_query; $wp_query= null;
			$wp_query = new WP_Query(); $wp_query->query('posts_per_page=3' . '&paged='.$paged);
			while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<div class="container-fluid">
		<!-- Bloghome List -->
				<ul>
					

					<!-- Blog Item 1 -->
							<div class="bloghome__article col-md-4">
								<li class="bloghome__article--inner">
									<a class="bloghome__article--link" href="<?php the_permalink(); ?>">
										<img class= "bloghome__article--image" src="<?php the_post_thumbnail_url(); ?>" >
									</a>
									<div class="bloghome__article--description-container">
										<div class="bloghome__article--description">
											<h4 class="bloghome__article--name">
												<a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h4>
											<?php the_excerpt(); ?>
											<div class="bloghome__article--readmore">
												<a class="btn traegifts__button" href="<?php the_permalink(); ?>">Leer más</a>
											</div>
										</div>
									</div>
								</li>
							</div>

					

					
				</ul>

				<?php endwhile; ?>
			</div>
			</div> <!-- col-md-12 -->
		</div><!--Blog row -->
	</div><!--Blog containerfluid -->

	<div class="container">
		<h1 class="text-center">Consultando Clima mediante ajax</h1>

		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<select class="form-control" id="select">
						<option>seleciones una ubicacion</option>
						<option value="scl">santiago, regiónMetropolitana</option>
						<option value="ccp">Concepción, Región del Bio Bio</option>
					</select>
					<img class="img-responsive"src="">
				</div>
			</div>
			<div class="col-md-8 hidden="true" id="escondido">
				<h2 id="resumen"></h2>
				<table class="table table-striped">
					<tr>
						<td>Sensacion termica</td>
						<td id="sensacion"></td>
					</tr>
					<tr>
						<td>Probabilidad lluvia</td>
						<td id="probabilidad"></td>
					</tr>
					<tr>
						<td>Humedad relativa</td>
						<td id="humedad"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>

	<?php get_template_part('_includes/iOS', 'opinions') ?>

	


	<div class="header-promocional col-md-12">
		<a href="http://localhost:8888/ofertas/">
		<?php $image = get_field('imagen-promocional'); ?>
		<img class="header__image header__image--home" src="<?php echo get_template_directory_uri(); ?>/src/images/bannerpromo.png"/>
		</a>
	</div>




<?php get_footer()?>
</div><!-- Main Right -->
<?php get_sidebar()?>
</body>
</html>

