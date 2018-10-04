<div class="products__grid container-fluid">

		<!-- Products List-->
		<!-- First Column of Products-->
		<div class="row">
			<div class="col-md-12">

				<?php if (have_posts()) { ?>

					<ul class="products__grid--list">
						<?php while ( have_posts() ) { the_post(); ?>
							<div class="col-md-15 products__grid--item ">
								<li class="products__grid--item">
									<a href="<?php the_permalink() ?>" title="Mug happy" class="products__grid--link">
										<?php $image = get_field('imagen-producto'); ?>
										<img class="products__grid--image" src="<?php echo $image['url']; ?>" 
										alt="<?php echo $image['alt']; ?>" />
									</a>

									<div class="products__grid--info">
										<a href="<?php the_permalink() ?>">
											<h4 class="products__grid--name">
												<?php the_title() ?>
											</h4>
										</a>

										<?php the_excerpt() ?>
									</div>
									<div class="products__grid--price">
										<p><?php echo get_field('precio'); ?></p>
									</div>
								</li>
							</div>
						<?php }; ?>


					</ul>

				<?php } else { ?>
					<!-- Content -->
					<p>No hay elementos</p>
				<?php } wp_reset_query(); ?>

			</div><!-- col-md-12-->
		</div><!--row-->
	</div><!--product grid-->

