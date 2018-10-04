<?php 
/*
	Template Name: ofertas
*/
?>


<?php get_header() ?>

	<?php if (have_posts()) { ?>

	<ul>
		
		<li>
			<?php while ( have_posts() ) { the_post(); ?>
			<a href="<?php the_permalink() ?>">
				<?php the_post_thumbnail() ?>
				<?php the_title() ?>
				<?php $image = get_field('oferta-imagen'); ?>
				<img class="products__grid--image" src="<?php echo $image['url']; ?>" 
				<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
				<?php the_excerpt() ?>
			</a>
			<?php }; ?>
		</li>
		
	</ul>

	<?php } else { ?>
		<!-- Content -->
		<p>No hay elementos</p>
	<?php } wp_reset_query(); ?>

	<?php get_sidebar() ?>
<?php get_footer() ?>