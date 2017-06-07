<!DOCTYPE html>
<html class="no-js">
<head>


    <!-- Meta info -->
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Qué hacemos?</title>
    <meta content="" name="description">
    <meta name="author" content="">
    <meta name="format-detection" content="">

    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    <link href="styles/main.css" rel="stylesheet" media="screen, print" type="text/css">
    <script src="lib/modernizr-2.6.2.js"></script>
    
    
</head>
<body>
    <div id="container">
        <section id="content">
            
<div id="what-we-do">
	<header>
    	<div id="pfd">
        	<a href="index.php">
            <img src="images/pyaari-logo.png" alt="PORTAL PARA MASCOTAS PERDIDAS">
        	</a>
    	</div>
        
    	<div id="preamble">
        	<h1>¿Qué hacemos?</h1>
				<p class="em" style="color:#000000;">El portal posibilita un de rescate de mascotas extraviadas y el poder publicar de igual manera mascotas encontradas en la vía pública.</p>
				<p class="em" style="color:#000000;">Esta iniciativa no solo les permite a los usuarios registrar su mascota, sino que permite que cientos personas puedan recibir sus datos en caso de la pérdida del animal.</p>
		</div>
		<center>
		<?php 
			echo '<img src="images/hacemos.png" width="500" height="220" alt="HACEMOS" title="HACEMOS">';
		?> 
				</center>

	</header>
<article>
        	<h2>Un poco más</h2>
				<p>Esta idea surgió ante la necesidad y la angustia que las personas sentían al perder sus animales. Juntamos esta situación con la tecnología y el resultado fue una excelente herramienta. Próximamente tendremos otros servicios asociados con GPS para ubicación georeferenciados podrán ser agregados.</p>
				<p>Este novedoso servicio está disponible para todo el país. Esta la primera solución de su tipo, y se estima que será de gran ayuda para el creciente número de personas que cada vez opta por tener una o más mascotas en su hogar.</p>
				<p>Por su parte, quien encuentre al animal podrá reportarlo ingresando a los datos del dueño y contactarlo, de esta manera el dueño inmediatamente quedará notificado medianto un correo electrónico, esto permitirá facilitar el reencuentro.</p>
		</article>

<div id="container" style="left: 60px;">
		<center>
			<h3>El Clima y Condiciones meteorológicas de la ciudad de: LOS MOCHIS, SINALOA</h3>
								<?php	echo '<img src="images/clima.png" width="90" height="80" alt="CLIMA" title="CLIMA">';?>

				<?php

						$buscar = 'Los Mochis';

						if (empty($buscar))
							{
							echo "ADVERTENCIA: No se ha ingresado ninguna ciudad a evaluar";
							}
						else
							{
							# La url para la invocación:
							$url="http://api.openweathermap.org/data/2.5/weather?APPID=f72fba139ca30bd96b5f13e4a6d426d1&q=$buscar,es&units=metric&lang=es";
							# Recupero los datos en la variable $json
							$json=file_get_contents($url);
							# convierto la variable $json en un array php llamado $data
							$data=json_decode($json,true);
							# Presento en pantalla algunos datos:
							echo "<br>";
							echo 'Temperatura: '.$data['main']['temp']."<br>";
							echo 'Tiempo actual: '.$data['weather'][0]['main'].', ' . $data['weather'][0]['description']."<br>";
							echo 'Nubosidad: '.$data['clouds']['all']." %<br>";
							echo 'Velocidad de viento: '.$data['wind']['speed']."<br>";
							echo 'Salida del sol: '. date ('H:i:s', $data['sys']['sunrise'])."<br>";
							echo 'Puesta de sol: '. date ('H:i:s',$data['sys']['sunset'])."<br>";
							}
?>
</center>
 </div>
	
</div><!-- what we do -->


       <footer id="msf">
            <div class="wrapper">
                <ul id="lets-be-social">
                    <li>
                        <a href="https://twitter.com/Tango_BME" rel="external" target="_blank" title="Twitter">Twitter.</a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/ElPortalParaMascotasPerdidas/" rel="external" target="_blank" title="Facebook">Facebook.</a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/watch?v=3BOnnmqcU4o" rel="external" target="_blank" title="Youtube">Youtube.</a>
                    </li>
                </ul>
                
                <div id="legal">
                	<span>Equipo Pasito Perron<br>301Software &copy; 2017 FIM-UAS</span>
                </div>
                
            </div><!-- wrapper -->
        </footer><!-- footer -->
    </div><!-- container -->
    
    
    <nav id="toc">
        <ul>
            <li>
                <a class="active" href="index.php">Mascotas</a></li>
            <li>
                <a href="nosotros.php">Nosotros</a></li>
            <li>
                <a href="hacemos.php">¿Qué hacemos?</a></li>
			<li>
                <a href="envia.php">Envía</a></li>
        </ul>
	</nav>
        
    <div id="no-script">
        <div>
            <p><a href="http://enable-javascript.com/">enable javascript</a> to use this site without issue.</p>
        </div>
    </div><!-- no-script -->
    
    
    <script src="ajax/jquery-1.11.0.min.js"></script>
    <script src="scripts/pyaari-main.1.0.js"></script>
    <script src="scripts/pyaari-menu.1.0.js"></script>
    <script>
        $(document).ready(function () {
            PfdMenu._ctor();
        });
    </script>
    

    <script>
    	$(document).ready(function(){
	       ReadMore.init();
    	})
    </script>


</body>
</html>