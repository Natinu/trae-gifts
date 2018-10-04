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

add_action( 'init', 'lapizzeria_especialidades' );
function lapizzeria_especialidades() {
	$labels = array(
		'name'               => _x( 'Pizzas', 'lapizzeria' ),
		'singular_name'      => _x( 'Pizzas', 'post type singular name', 'lapizzeria' ),
		'menu_name'          => _x( 'Pizzas', 'admin menu', 'lapizzeria' ),
		'name_admin_bar'     => _x( 'Pizzas', 'add new on admin bar', 'lapizzeria' ),
		'add_new'            => _x( 'Add New', 'book', 'lapizzeria' ),
		'add_new_item'       => __( 'Add New Pizza', 'lapizzeria' ),
		'new_item'           => __( 'New Pizzas', 'lapizzeria' ),
		'edit_item'          => __( 'Edit Pizzas', 'lapizzeria' ),
		'view_item'          => __( 'View Pizzas', 'lapizzeria' ),
		'all_items'          => __( 'All Pizzas', 'lapizzeria' ),
		'search_items'       => __( 'Search Pizzas', 'lapizzeria' ),
		'parent_item_colon'  => __( 'Parent Pizzas:', 'lapizzeria' ),
		'not_found'          => __( 'No Pizzases found.', 'lapizzeria' ),
		'not_found_in_trash' => __( 'No Pizzases found in Trash.', 'lapizzeria' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', 'lapizzeria' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'especialidades' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'especialidades', $args );
}

?>