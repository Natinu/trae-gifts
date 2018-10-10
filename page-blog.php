<?php 
/*
	Template Name: Blog
*/
	?>
	<?php get_header(); ?>

	<div class="products__grid--category">

		<div class="products__grid--category-menu">
			<h3 class="products__grid--title">Blog</h3>
		</div>

	</div>




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
										<a class="blogmain__article--link" href="<?php the_permalink(); ?>">
											<img class= "blogmain__article--image" src="<?php the_post_thumbnail_url(); ?>" >
										</a>
										<div class="blogmain__article--description-container">
											<div class="blogmain__article--description">
												<h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
												<div class="blogmain__article--description-fecha">
													<time>
														<span><i class="fas fa-calendar-alt"></i></span>
														<?php echo the_time('d'); ?>
														<span><?php the_time('M'); ?></span>
													</time>

												</div>
												<?php the_excerpt(); ?>
												<div class="blogmain__article--readmore">
													<a class="btn traegifts__button" href="<?php the_permalink(); ?>">Leer más</a>
												</div>
											</div>
										</div>
									</li>
								</div>
							</ul>



						<?php endwhile; ?>

						<?php if ($paged > 1) { ?>

							<nav id="nav-posts">
								<div class="prev"><?php next_posts_link('&laquo; Post anterior'); ?></div>
								<div class="next"><?php previous_posts_link('Articulo reciente &raquo;'); ?></div>
							</nav>

						<?php } else { ?>

							<nav id="nav-posts">
								<div class="prev"><?php next_posts_link('&laquo; Articulo anterior'); ?></div>
							</nav>

						<?php } ?>

						<?php wp_reset_postdata(); ?>

					</div><!-- col-md-9 -->


					<?php get_template_part('_includes/iOS', 'sidebarblog') ?>








				</article>
			</div>
		</div>


		<?php get_footer(); ?>
	</div>