
	<?php get_header() ?>

	


	<!-- Products Grid-->
	<div class="products__grid container-fluid">
		<!-- Products title -->
		<div class="products__grid--category">
			
			<div class="products__grid--category-menu">
				<h3 class="products__grid--title">Regalos para clientes</h3>
				<div class="products__grid--category-menu-right">
					<label id="products__sortform--select">Ordenar por</label>
					<select id="products__sortform form-control" class="products__sortform" name="" >
						<option value="position:desc">--</option>
						<option value="price:asc">Precio de menor a mayor</option>
						<option value="price:desc">Precio de mayor a menor</option>

					</select>
				</div>
			</div>

		</div>


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




	<?php get_template_part('_includes/iOS', 'opinions') ?>

	<?php get_template_part('_includes/iOS', 'subscribe') ?>

<?php get_footer()?>
</div><!-- Main Right -->
<?php get_sidebar()?>

</body>
</html>




