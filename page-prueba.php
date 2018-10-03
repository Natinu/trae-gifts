<!DOCTYPE html>
<html>
<head>
	<title></title>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



</head>

   
    <script type="text/javascript">
    //<![CDATA[
    // agrega un parametro unico al archivo
    var prevenirCache=1;
 
    /*** no editar ***/
    var cargarObjetos="";
    var rootdomain="http://"+window.location.hostname;
    var cacheParam="";
    function cargarAjax(url,divAjax){
    var contenidoAjax = false;
 
    if(window.XMLHttpRequest) {
    contenidoAjax = new XMLHttpRequest();
    }else if(window.ActiveXObject) {
    contenidoAjax = new ActiveXObject("Microsoft.XMLHTTP");
    }else{
    alert('Su navegador no soporta Ajax');
    }
 
    contenidoAjax.onreadystatechange=function(){
    cargaPagina(contenidoAjax,divAjax);
    }
 
    if(prevenirCache == 1){
        cacheParam=(url.indexOf("?")!=-1)? "&"+ new Date().getTime() : "?"+ new Date().getTime();
        }
            contenidoAjax.open('GET', url+cacheParam, true);
        contenidoAjax.send(null);
        }
 
 
        function cargaPagina(contenidoAjax,divAjax){
            if(contenidoAjax.readyState==1){
    // el mensaje actualizando es opcional
                document.getElementById(divAjax).innerHTML = '<p style="text-align: center;">actualizando<\/p>';
                }
                if(contenidoAjax.readyState == 4 && (contenidoAjax.status==200 || window.location.href.indexOf("http")==-1)){
                    document.getElementById(divAjax).innerHTML=contenidoAjax.responseText;
                    }
                    }
 
    // llamas a la función cada 59 segundos para que actualice la imagen
    window.onload = setInterval("cargarAjax('hora.php','la_hora')", 59000);
    //]]>
    </script>
    </head>
    <body>
    <div id="la_hora">
    <?php
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $hora = date('G');
    // mostrás la imagen por defecto al cargar la página
    echo "<img src='blog01.jpg' alt='' width='100' height='100' />";
    ?>

    



    ?>
    </div>
    </body>
    </html>


<!-- jQuery min -->

<!-- jQuery bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script src="<?php echo get_template_directory_uri();?>/assets/js/app.js"></script>
 
  

  
 
</body>
</html>