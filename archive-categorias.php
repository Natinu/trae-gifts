
<?php 
/* 
* Template Name: categorias
*/
?>




<?php get_header() ?>
CATEGORIAS

	<?php if (have_posts()) { ?>

	<ul>
		<?php while ( have_posts() ) { the_post(); ?>
		<li>
			<a href="<?php the_permalink() ?>">
				<?php the_post_thumbnail() ?>
				<?php the_title() ?>
				<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
				<?php the_excerpt() ?>
			</a>
		</li>
		<?php }; ?>
	</ul>

	<?php } else { ?>

		<!-- Content -->
		<p>No hay elementos</p>
	<?php } wp_reset_query(); ?>


	<?php
		$args = array (
			'post_type' => 'categorias',
			'posts_per_page' => -1,
			'orderby' => 'title',
			'order' => 'ASC',
			'category_name' =>'clientes'

		);
		$clientes = new WP_Query($args);
			while($clientes->have_posts()): $clientes->the_post();
			?>
			

			<ul>
				<li>
					<?php the_title() ?>
				</li>
			</ul>
			<?php endwhile; wp_reset_postdata();?>



	<?php get_sidebar() ?>
<?php get_footer() ?>