<?php get_header()?>

<!-- Main Left-->
<div class="main__left col-md-1">
	<img class="main__left--image" src="<?php echo get_template_directory_uri(); ?>/src/images/logotraegifts.png" alt="logo principal">
</div>

<!-- Main Right-->
<div class="main__right col-md-11">

	<!-- NavBar-->
	<nav class="navbar col-md-12 navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<div class="navbar-left col-md-10">
				<ul class="navbar-nav">
					<li class="nav-item ">
						<div class="nav--componente__menu"> </div>
						<a class="nav-link" href="#">Regalos para Empleados <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="#">Regalos para Clientes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Todos los regalos</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contacto</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- imagen de fondo -->
	<div class="contacto__background col-md-12 responsive">
		<form class="contacto__form offset-md-3 col-md-6">
			<div class="contacto__form--description">
				<h1>Necesito mi regalo</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				

			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="exampleInputname" aria-describedby="namelHelp" placeholder="Nombre">
			</div>
			<div class="form-group">
				<input type="tel" class="form-control" id="exampleInputcel" aria-describedby=celHelp" placeholder="Tel/Cel">
			</div>
			<div class="form-group">
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Dejanos tu email">
				<small id="emailHelp" class="form-text text-muted">Nunca compartiriamos tu email con alguien más.</small>
			</div>
			<div class="form-group">
				<textarea class="form-control" name="comentarios" rows="10" cols="40" placeholder="Escribe aquí tu mensaje"></textarea>
			</div>
			
			<div class="contacto__form--button">
				<a class="btn traegifts__button" type="submit" href="#">Enviar</a>
			</div>
		</form>

	</div>


ACA MAPA API----














		<?php get_footer()?>
	</div><!-- Main Right -->

</body>
</html>
<?php get_sidebar()?>
<?php get_header()?>