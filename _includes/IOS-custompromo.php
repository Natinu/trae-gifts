<!-- Products Grid-->
<div class="products__grid container-fluid">

	<!-- Products title -->
	<div class="products__grid--category">
		<h3 class="products__grid--title">Productos Destacados</h3>
	</div>

	<!-- Products List-->
	<!-- First Column of Products-->
	<div class="row">
		<div class="col-md-12">

			<?php if (have_posts()) { ?>

				<ul class="products__grid--list">
					<div class=" products__grid--item ">
						<?php while ( have_posts() ) { the_post(); ?>
							<li class="products__grid--item">
								<a href="<?php the_permalink() ?>" title="Mug happy" class="products__grid--link">
									<?php $image = get_field('promo'); ?>
									<img class="products__grid--image" src="<?php echo $image['url']; ?>" 
									alt="<?php echo $image['alt']; ?>" />
								</a>

								<div class="products__grid--info">
									<a href="<?php the_permalink() ?>">
										<h2 class="products__grid--name">
											<?php the_title() ?>
										</h2>
									</a>

									<?php the_excerpt() ?>
								</div>
								<div class="products__grid--price">
									<p><?php echo get_field('precio'); ?></p>
								</div>
							</li>
						<?php }; ?>
					</div>

				</ul>

			<?php } else { ?>
				<!-- Content -->
				<p>No hay elementos</p>
			<?php } wp_reset_query(); ?>

		</div><!-- col-md-12-->
	</div><!--row-->
</div><!--product grid-->
