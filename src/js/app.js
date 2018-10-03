//require('jquery');

import $ from 'jquery';

import 'popper.js';
import 'bootstrap';


window.$ = window.jQuery = $;


$(document).ready( function($) {

// LLAMADO AJAX //

  $(document).ready(function() {
  var resumen = $('#resumen');
  var sensacion = $('#sensacion');
  var probabilidad = $('#Probabilidad');
  var humedad = $('#humedad');
  var imagen = $('.img-responsive');
  var escondido = $('#escondido');
  var url = 'https://api.darksky.net/forecast/';
  var key = '11f37451254f01aa594512ccb89a9c39';
  var coords = {
    scl: '-33.4488897, -70.6692655',
    ccp: '-36.8201352, -73.0443904'
  }
  var queryParams = ['?exclude=[minutely, hourly, daily, alerts, flags]', '&lang=es', '&units=auto'];
  var image = {
    "clear-day": 'http://www.chilenieve.com/uploaded_images/sol-t9942-744667.jpg'
  }
  $('#select').on('change', function(){
     $.ajax({
      url: url + key + '/' + coords[$(this).val()] + queryParams[0] + queryParams[1] + queryParams[2],  
      method: 'GET', //método que vamos a utilizar
      dataType: 'jsonp',
     }).then(function(data) {
       console.log(data);
      resumen.text(parseInt(data.currently.temperature) + 'º' + ' ' + data.currently.summary);
       sensacion.text(data.currently.apparentTemperature + 'º');
       probabilidad.text(data.currently.precipProbability * 100 + '%');
       humedad.text(data.currently.humidity * 100 + '%');
       imagen.attr('src', image[data.currently.icon]);
       escondido.removeAttr('hidden');
     });
  })
});


});
