<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>

<!-- Footer -->

<div class="footer__sentence col-md-12">
	<h1 class="footer__sentence"> HACEMOS <span class="footer__sentence--
outstanding">LUGARES DE TRABAJO</span> MÁS FELICES</h1>
	
</div>



	<div class="footer col-md-12">
		<div class="jumbotron footer__background">
			<div class="row">

				<!-- Left Column-->
				<div class="footer__sidebar--left col-md-4">
					<h4 class="footer__sidebar--title">
						Servicio al cliente
					</h4>
					<a href="#" class="footer__sidebar--link">
						<ul>
							<li class="footer__sidebar--item">Solicitud Catálogo</li>
							<li class="footer__sidebar--item">Garantías</li>
							<li class="footer__sidebar--item">Despachos</li>
						</ul>
					</a>
				</div>

				<!-- Middle Column -->
				<div class="footer__sidebar--middle col-md-4">
					<div class="footer__sidebar--middle-father">
						<img class="footer__sidebar--middle-image responsive" src="<?php echo get_template_directory_uri(); ?>/src/images/logotraeblanco.png" alt="Articulo sobre como premiar a tus empleados">
					</div>
					<div class="footer__container--rrss">
						<!-- Facebook -->
						<a class="footer__container--item" href="#"  target="_blank">
							<i class="fab fa-facebook-f"></i>
						</a>
						<!-- Instagram -->
						<a class="footer__container--item" href="#"  target="_blank">
							<i class="fab fa-instagram"></i>
						</a>
					</div>
				</div>

				<!-- Right Column -->
				<div class="footer__sidebar--right col-md-4">
					<h4 class="footer__sidebar--title">
						Acerca de Trae Gifts
					</h4>
					<a href="#" class="footer__sidebar--link">
						<ul>
							<li class="footer__sidebar--item">Nosotros</li>
							<li class="footer__sidebar--item">ventas@traegifts</li>
							<li class="footer__sidebar--item">22 6986911</li>
						</ul>
					</a>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Copyright -->
	<div class="copyright col-md-12">
		<p class="copyright__text">traeGifts 2018. Todos los derechos reservados</p>
	</div>






<?php wp_footer(); ?>
	<script type="text/javascript" src="<?php bloginfo( 'template_url' );?>/js/jquery.flexslider.js" >
		
	</script>
	<script type="text/javascript">
		// Can also be used with $(document).ready()
		jQuery(window).load(function() {
		  jQuery('.flexslider').flexslider({
			animation: "slide"
		  });
		});
	</script>
</body>
</html>