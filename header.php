<?php wp_head() ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/app.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/flexslider.css"/>
	<link href="https://fonts.googleapis.com/css?family=Abel|Dosis:400,500,600,700|Hind:700|Lobster" rel="stylesheet">
</head>
<body>

<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>