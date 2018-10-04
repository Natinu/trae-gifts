<?php get_header() ?>

<!-- article title -->

<div class="products__grid--category">
	<div class="products__grid--category-menu">
		<h3 class="products__grid--title"><?php the_title() ?></h3>
	</div>
</div>



	<?php the_post() ?>
	
	<?php the_post_thumbnail() ?>
	
	<?php the_content(); ?>


<?php get_footer() ?>