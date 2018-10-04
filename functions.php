<?php 

/**
 * Import functions folder
 * Imports all the files inside the functions folder 
 * and adds them into functions file
 *
 * @return  void
 * @since   1.0
 * @version 1.3
 */
require_once get_template_directory() . '/functions/__get_files_from.php';
$files = get_files_from( $theme_options['functions'] );

foreach($files as $file) {
	require_once $file;
}

function custom_excerpt_length( $length ) {
        return 35;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**
 * Check Minimum WP version
 * This theme only works in WordPress 4.8 or later.
 *
 * @return  void
 * @since   1.0
 */
if ( version_compare( $GLOBALS['wp_version'], $theme_options['wp_min_version'], '<' ) ) {
	require get_template_directory() . '/functions/back-compat.php';
	return;
}

add_action( 'init', 'traegifts_productos' );
function traegifts_productos() {
	$labels = array(
		'name'               => _x( 'productos', 'productostraegifts' ),
		'singular_name'      => _x( 'productos', 'post type singular name', 'productostraegifts' ),
		'menu_name'          => _x( 'productos', 'admin menu', 'productostraegifts' ),
		'name_admin_bar'     => _x( 'productos', 'add new on admin bar', 'productostraegifts' ),
		'add_new'            => _x( 'Add New', 'book', 'productostraegifts' ),
		'add_new_item'       => __( 'Añade un nuevo producto', 'productostraegifts' ),
		'new_item'           => __( 'New productos', 'productostraegifts' ),
		'edit_item'          => __( 'Edit productos', 'productostraegifts' ),
		'view_item'          => __( 'View productos', 'productostraegifts' ),
		'all_items'          => __( 'All productos', 'productostraegifts' ),
		'search_items'       => __( 'Search productos', 'productostraegifts' ),
		'parent_item_colon'  => __( 'Parent productos:', 'productostraegifts' ),
		'not_found'          => __( 'No productoses found.', 'productostraegifts' ),
		'not_found_in_trash' => __( 'No productoses found in Trash.', 'productostraegifts' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', 'productostraegifts' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'categoriaproductos' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'seccionproductos', $args );
}

add_action( 'init', 'traegifts_promociones' );
function traegifts_promociones() {
	$labels = array(
		'name'               => _x( 'promociones', 'promocionestraegifts' ),
		'singular_name'      => _x( 'promociones', 'post type singular name', 'promocionestraegifts' ),
		'menu_name'          => _x( 'promociones', 'admin menu', 'promocionestraegifts' ),
		'name_admin_bar'     => _x( 'promociones', 'add new on admin bar', 'promocionestraegifts' ),
		'add_new'            => _x( 'Add New', 'book', 'promocionestraegifts' ),
		'add_new_item'       => __( 'Add New Pizza', 'promocionestraegifts' ),
		'new_item'           => __( 'New promociones', 'promocionestraegifts' ),
		'edit_item'          => __( 'Edit promociones', 'promocionestraegifts' ),
		'view_item'          => __( 'View promociones', 'promocionestraegifts' ),
		'all_items'          => __( 'All promociones', 'promocionestraegifts' ),
		'search_items'       => __( 'Search promociones', 'promocionestraegifts' ),
		'parent_item_colon'  => __( 'Parent promociones:', 'promocionestraegifts' ),
		'not_found'          => __( 'No promocioneses found.', 'promocionestraegifts' ),
		'not_found_in_trash' => __( 'No promocioneses found in Trash.', 'promocionestraegifts' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', 'promocionestraegifts' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'ofertas' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'seccionpromociones', $args );
}

?>