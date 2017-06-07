<!DOCTYPE html>
<html class="no-js">
<head>


    <!-- Meta info -->
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerda de nosotros</title>
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
            
<header>
    <div id="pfd">
        <a href="index.php">
            <img src="images/pyaari-logo.png" alt="PORTAL PARA MASCOTAS PERDIDAS">
        </a>
    </div>
    
    <div id="preamble">
            <h1>Acerca de nosotros</h1>
			<p> Ayudamos a que de una mascota perdida, su dueño pueda subir una foto a nuestro portal para que así pueda ser vista por cientos de personas y poder ser encontrada de una forma mucho más rápida que las convencionales y además de que nos encontramos a la vanguardia en cuanto a la era de la tecnología</p>
			<p><span class="strong">Nuestro equipo, </span> somos un grupo de jovenes que a parte de ser amigos, somos orgullosos dueños de mascotas. Y estamos a la servicio de nuestros compañeros ciudadanos</p>
			<p><span class="strong">Mascota perdida</span> nosotros trabajamos en colaboración con otras redes sociales, que son las que hoy en día llaman más que nada a los jovenes que son quienes nos ayudan a difundir más los mensajes de nuestras mascotas perdidas. Trabajamos con las plataformas de Facebook y Twitter que hoy en días son de las redes sociales más utilizadas por chicos y grandes, ofreciendonos así un gran soporte en cuanto a la difusión de nuestras mascotas perdidas.</p>
			<p class="space-after"><span class="strong">Garantía</span> es algo que ofrecemos en cuanto usted comparta de manera honesta a su mascota perdida, y no la garantisamos de una manera rapida y eficas, pero con ayuda de las tecnologías garantisamos que su mascota se encuentra de una forma mucho más rápida</p>
			<p></p>
			<center>
		<?php 
			echo '<img src="images/acerca.png" width="639" height="161" alt="HACEMOS" title="HACEMOS">';
		?> 
				</center>
			<p></p>
			<h3>Asosiación sin fines de lucro</h3>
			<p>Esta portal es el único que existe con este servicio totalmente gratuito. Si gustas dar algún donativo ponte en contácto conmigo y <a href="https://www.facebook.com/lidia.lau.china" rel="external" target="_blank">Contáctame</a>.</p>
			<p></p>
			<p></p>
	</div>
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
	
</header>
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
