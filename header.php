<?php wp_head() ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<title><?php bloginfo('name') ?>| <?php bloginfo('description') ?></title>
	<?php wp_head() ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/app.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/flexslider.css"/>
	<link href="https://fonts.googleapis.com/css?family=Abel|Dosis:400,500,600,700|Hind:700|Lobster" rel="stylesheet">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126816631-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-126816631-1');
	</script>

</head>
<body>

	<!-- Main Left-->
	<div class="main__left container-fluid hidden-xs col-md-1">
		<div class="main__left--container hidden-xs hidden-xs">
		<a class="main__left--logo hidden-xs" href="http://liker.cl/">
			<img class="main__left--image hidden-xs" src="<?php echo get_template_directory_uri(); ?>/src/images/logotraegifts.png" alt="logo principal">
		</a>
		</div>
	</div>


		<!--NavBar Trae gifts -->
		
		<div class="offset-md-1 col-md-11">

			<nav class="navbar col-sm-12 navbar-expand-lg navbar-light bg-light">


				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
					</span>
				</button>
			<a class="main__left--logo-toggle" href="http://localhost:8888/">
					<img class="main__left--image-nav hidden-xs" src="<?php echo get_template_directory_uri(); ?>/src/images/logo-horizontal.png" alt="logo principal">
					</a>
		
				<div class="collapse navbar-collapse" id="navbarNav">					
					<div class="navbar-left col-md-10">

						<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header_menu' ) ); ?>
						<?php } ?>

					</div>
				</div>
			</nav>
		</div>

			
		

		<!-- Main Right-->
	
		<div class="main__right container-fluid col-sm-12 offset-md-1 col-md-11">
		<div class="container__content--mainright">

