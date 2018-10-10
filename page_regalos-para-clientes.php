
<?php /* Template Name: regalos para clientes */ ?>


<?php get_header()?>

<div class="products__grid container-fluid">

	<!-- Products title -->
	<div class="products__grid--category">
		<div class="products__grid--category-menu">
			<h3 class="products__grid--title">Regalos para clientes</h3>

			<!-- Products filtro -->
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


	<!-- Llamado Regalos 'para clientes' -->



	<div class="row">
		<div class="col-md-12">
				<ul class="products__grid--list">
					<?php
			$args = array (
				'post_type' => 'categorias',
				'posts_per_page' => 50,
				'orderby' => 'title',
				'order' => 'ASC',
				'category_name' =>'para-clientes'

			);

			$clientes = new WP_Query($args);
			while($clientes->have_posts()): $clientes->the_post(); ?>

					<div class="col-md-15 products__grid--item ">
						<li class="products__grid--item">
							<a href="<?php the_permalink() ?>" title="Mug happy" class="products__grid--link">

								<img class= "products__grid--image" src="<?php the_post_thumbnail_url(); ?>" >
								
							</a>
							<div class="products__grid--info">
								<a href="<?php the_permalink() ?>">
									<h4 class="products__grid--name">
										<?php the_title() ?>
									</h4>
									
								</a>

								
							</div>
							<div class="products__grid--price">
								<p><?php echo get_field('precio'); ?></p>
							</div>
							<a class="btn traegifts__button--subscribe" href="<?php the_permalink() ?>">Ver más</a>
								
							

						</li>
					</div>
				<?php endwhile; wp_reset_postdata();?>
			</ul>
			
		</div><!-- col-md-12-->
	</div><!--row-->








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

	<?php get_template_part('_includes/iOS', 'opinions') ?>

	<?php get_template_part('_includes/iOS', 'subscribe') ?>



	<?php get_footer()?>
</div><!-- Main Right -->
<?php get_sidebar()?>


</body>
</html>
