
<!DOCTYPE HTML>
<html>
<head>
<title>Envía tú mascota</title>
<!-- Meta info -->
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerda de nosotros</title>
    <meta content="" name="description">
    <meta name="author" content="">
    <meta name="format-detection" content="">
	<meta name="keywords" content="Creative Contact Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    <link href="styles/main.css" rel="stylesheet" media="screen, print" type="text/css">
    <script src="lib/modernizr-2.6.2.js"></script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<!-- //for-mobile-apps -->
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons -->
	<!--Google Fonts-->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

</head>
<body>
<header>
    <div id="pfd">
        <a href="index.php">
            <img src="images/pyaari-logo.png" alt="PORTAL PARA MASCOTAS PERDIDAS">
        </a>
    </div>
</header>
<div class="wthree-dot">
	<h1>ENVIANOS TUS DATOS</h1>
	<div class="profile">
		<div class="wrap">
			<div class="contact-form">
			    <form enctype="multipart/form-data" action="uploader.php" method="POST">

					<div class="w3l-contact-left">
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="Nombre" required="">
							<label>Nombre</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="text" name="Email" required=""> 
							<label>Email</label>
							<span></span>
						</div> 
						<div class="styled-input">
							<input type="text" name="Celular" required="">
							<label>Celular</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="text" name="NombreMascota" required="">
							<label>Nombre Mascota</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="text" name="Sena" required="">
							<label>Seña particular</label>
							<span></span>
						</div>
					</div>
						<!--Crea la forma que permite explorar en su búsqueda en el equipo local.-->
						<!--uploader.php script-->
							<input name="uploadedfile" type="file" />
							<input type="submit" value="Subir archivo" />
					 
							<span></span>
						</div>	 
					
					<div class="clear"> </div>
				</form>
			</div>
			
		</div>
	</div>
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
	
</div>

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
</html>