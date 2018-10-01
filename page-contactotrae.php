<?php get_header()?>

	<!-- imagen de fondo -->
	<div class="contacto__background col-md-12 responsive">
		<div class="contacto__background--opacity col-md-12">
		<div class="col-sm-12 offset-md-3 col-md-6 ">
		<form class="contacto__form">
			<div class="contacto__form--description">
				<h1>¡Contáctanos!</h1>
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
			
			<div class="contactotrae__button">
				<a class="btn traegifts__button--contactotrae" type="submit" href="#">Enviar</a>
			</div>


		</form>
		</div>
		</div>
	</div>


	<div class="jumbotron api__googlemaps">
    <!--The div element for the map -->
    <div id="map"></div>

	</div>
	
	<?php get_template_part('_includes/iOS', 'subscribe') ?>














		<?php get_footer()?>
	</div><!-- Main Right -->
<script>
// Initialize and add the map
function initMap() {
  // The location of Trae
  var traegifts = {lat: -33.4366471, lng: -70.6448424};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 15, center: traegifts});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: traegifts, map: map});

}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer

    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoOj1vZKIRsp2seGbp_Sd4Fot8ldqAH1M
&callback=initMap">
    </script>
</body>
</html>
<?php get_sidebar()?>
<?php get_header()?>