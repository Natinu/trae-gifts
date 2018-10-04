<?php 
/*
	Template Name: ProductosDestacados
*/
	?>


<?php get_header() 




?>



<h1>PRODUCTOSDESTACADOS MIERCOLES</h1>


<?php
	$arg = array(
		'post_type'		 => 'custom_post_name',
		'paged'			 => $paged
	);
	
	$get_arg = new WP_Query( $arg );
	
	while ( $get_arg->have_posts() ) {
		$get_arg->the_post();
	?>
	<div class="nuestros-productos">
	<h3>Productos del home</h3>
		<?php
		$args = array(
			'post_type' => 'seccionproductos',
			'post_per_page' => -1,
			'orderby' => 'title',
			'order' => 'ASC',
			'category_name' => 'productos'
		);
		$productos = new WP_Query($args);
		while($productos->have_post()): $productos->the_post();

		?>

			<ul>
				<li> <?php the_title(); ?> </li>
			</ul>

		<?php endwhile; wp_reset_postdata(); ?>


	</div>
		
		<!-- Aquí agregar contenido a mostrar por el loop -->
	
	<?php } 
?>

<?php the_pagination( $get_arg ); ?>




<!-- Products Grid-->
<div class="nuestros-productos">
	<h3>Productos del home</h3>
		<?php
		$args = array(
			'post_type' => 'seccionproductos',
			'post_per_page' => -1,
			'orderby' => 'title',
			'order' => 'ASC',
			'category_name' => 'productos'
		);
		$productos = new WP_Query($args);
		while($productos->have_post()): $productos->the_post();

		?>

			<ul>
				<li> <?php the_title(); ?> </li>
			</ul>

		<?php endwhile; wp_reset_postdata(); ?>


	</div>
</div>


<?php get_footer() ?>