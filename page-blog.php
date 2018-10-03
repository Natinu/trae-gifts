<?php 
/*
	Template Name: Blog
*/
	?>
	<?php get_header(); ?>


			

				<div class="blogmain container-fluid col-md-12">
					<div class="blogmain__container col-md-9">
						<?php // Display blog posts on any page @ https://m0n.co/l
			$temp = $wp_query; $wp_query= null;
			$wp_query = new WP_Query(); $wp_query->query('posts_per_page=3' . '&paged='.$paged);
			while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

						<ul>
							<!-- Blog Item 1 -->
							<div class="blogmain__article col-md-12">
								<li class="blogmain__article--inner">
									<a class="blogmain__article--link">
										<img class= "blogmain__article--image" src="<?php the_post_thumbnail_url(); ?>" >
									</a>
									<div class="blogmain__article--description-container">
										<div class="blogmain__article--description">
											<h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
											<?php the_excerpt(); ?>
											<div class="blogmain__article--readmore">
												<a class="btn traegifts__button" href="#">Leer más</a>
											</div>
										</div>
									</div>
								</li>
							</div>
						</ul>
					

					<?php endwhile; ?>
				</div><!-- col-md-9 -->


					<div class="blogmain__sidebar col-md-3">
						<ul>
							<!-- Blog Sidebar Item 1 -->
							<div class="blogmain__sidebar col-md-12">
								<li class="blogmain__sidebar--inner">

									<div class="blogmain__sidebar--description-container">
										<div class="blogmain__sidebar--description">
											<h4 class="blogmain__sidebar--name">
												Todo lo que necesitas para hacer feliz a tus empreados y clientes
											</h4>
											<p>Has sentido la emoción que surge en los discursos de las premiaciones: las lágrimas,.</p>
											<input class="blogmain__sidebar--input" type="" name="">
											<div class="blogmain__sidebar--readmore">
												<a class="btn traegifts__button" href="#">Suscríbete</a>
											</div>
										</div>
									</div>
								</li>
							</div>

							<!-- Blog Sidebar Item 2 -->
							<div class="blogmain__sidebar col-md-12">
								<li class="blogmain__sidebar--inner">

									<div class="blogmain__sidebar--description-container">
										<div class="blogmain__sidebar--description">
											<h4 class="blogmain__sidebar--name">
												Todo lo que necesitas para hacer feliz a tus empreados y clientes
											</h4>
											<p>Has sentido la emoción que surge en los discursos de las premiaciones: las lágrimas,.</p>

										</div>
									</div>
								</li>
							</div>

							<!-- Blog Sidebar Item 3 -->
							<div class="blogmain__sidebar col-md-12">
								<li class="blogmain__sidebar--inner">

									<div class="blogmain__sidebar--description-container">
										<div class="blogmain__sidebar--description">
											<h4 class="blogmain__sidebar--name">
												Todo lo que necesitas para hacer feliz a tus empreados y clientes
											</h4>
											<p>Has sentido la emoción que surge en los discursos de las premiaciones: las lágrimas,.</p>

										</div>
									</div>
								</li>
							</div>
						</ul>
					</div> <!-- col-md-3 -->
				




			


			<?php if ($paged > 1) { ?>

				<nav id="nav-posts">
					<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
					<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
				</nav>

			<?php } else { ?>

				<nav id="nav-posts">
					<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
				</nav>

			<?php } ?>

			<?php wp_reset_postdata(); ?>

		</article>
	</div>
</div>


<?php get_footer(); ?>
</div>