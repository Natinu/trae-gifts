<?php
/*
Template Name: Destacado
*/
get_header();


$temp = $wp_query;
$wp_query = null;
$wp_query = new WP_Query();
$wp_query->query(post_type=seccionproductos);
if ( $wp_query->have_posts() ) : while ($wp_query->have_posts()) : $wp_query->the_post();
	the_title();
	the_content();
	endwhile;
endif;

sFFFFFF
get_footer(); ?>