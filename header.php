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

	<!-- Main Left-->
<div class="main__left col-md-1">
	<a href="http://localhost:8888/">
	<img class="main__left--image" src="<?php echo get_template_directory_uri(); ?>/src/images/logotraegifts.png" alt="logo principal">
	</a>
</div>

<!-- Main Right-->
<div class="main__right col-md-11">

<!--NavBar Nati -->
<nav class="navbar col-md-12 navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<div class="navbar-left col-md-10">

<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>

		</div>
		</div>
		</nav>

