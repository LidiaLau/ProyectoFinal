<!DOCTYPE html>
<html class="no-js">
<head>


    <!-- Meta info -->
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASCOTA PERDIDA</title>
    <meta content="" name="description">
    <meta name="author" content="">
    <meta name="format-detection" content="">

    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    <link href="styles/main.css" rel="stylesheet" media="screen, print" type="text/css">
    <script src="lib/modernizr-2.6.2.js"></script>
</head>
<body>
    <div id="container" style="left: 0px;">
        <section id="content">
            
<header>
    <div id="pfd">
        <a href="index.php">
            <img src="images/pyaari-logo.png" alt="PORTAL PARA MASCOTAS PERDIDAS">
        </a>
    </div>
    <div id="preamble" class="home">
        <div class="preamble">
	<h1>
	Portal exclusivo para mascotas que necesitan ayuda, porque se han perdido, fueron encontradas o de alguna manera tienes la necesidad de que cirucule su imagen para poder ayudar a una mascota para que encuentre a su familia.</h1>
	<p class="em" style="display: none;">
		Este portal funciona como una red social donde ayuda a los dueños de mascotas a reencontrarse con sus animales. Esta portal es el único que existe con este servicio totalmente gratuito.
</p>
	<a class="read-more" href="#">Leer más +</a></div>
<p>&nbsp;
	</p>

    </div>
</header>
<div id="our-work">
   <?php 
			 //extensiones validas 
			 $arr_ext=array("jpg","png","gif","JPG","PNG","GIF");

			 //directorio donde se encuentran 
			 $mydir=opendir("images/work/"); 
			 //leer archivos 
			 while($archivo=readdir($mydir)) 
			 { 
			 $ext=substr($archivo,-3); 
			 //si la extension del archivo es correcta muestra la imagen 
			 if(in_array($ext,$arr_ext)) 
			 { 
			 $archivo = "images/work/".$archivo;
			 echo ("<img src=".$archivo. " width='300' height= '300'>"); 
			 } 
			 } 			
	?>

</div>
</section>

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
            <p>
            
                 <a href="http://enable-javascript.com/">enable javascript</a> to use this site without issue.</p>
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