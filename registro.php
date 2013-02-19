<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	
	
	<title>.:PicBook:. - Registro</title>
	<meta name="description" content="">
	
	<!-- Mobile viewport optimized: h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width">
	
	
	<link rel="stylesheet" media="screen" href="css/superfish.css" /> 
	<link rel="stylesheet" href="css/nivo-slider.css" media="all"  /> 
	<link rel="stylesheet" href="css/tweet.css" media="all"  />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" media="all" href="css/lessframework.css"/>
	
	
	<!-- All JavaScript at the bottom, except this Modernizr build.
	   Modernizr enables HTML5 elements & feature detects for optimal performance.
	   Create your own custom Modernizr build: www.modernizr.com/download/ -->
	<script src="js/modernizr-2.5.3.min.js"></script>
</head>
<body>
	
	<!-- WRAPPER -->
	<div class="wrapper cf">
		<header class="cf">
			
			<!-- social-bar -->
			<div id="social-bar-holder">
				<ul id="social-bar" class="cf">
					<li class="dribbble"><a href="#"  title="Dribbble" ></a></li>
					<li class="facebook"><a href="#"  title="Facebook" ></a></li>
					<li class="forrst"><a href="#"  title="forrst" ></a></li>
					<li class="googleplus"><a href="#"  title="googleplus" ></a></li>
					<li class="twitter"><a href="#"  title="twitter" ></a></li>
				</ul>
			</div>
			<div class="cf"></div>
			<!-- ENDS social-bar -->
			
			<div id="logo" class="cf">
				<a href="index.php" ><img src="img/logo.png" alt="" /></a>
			</div>
			
			<!-- nav -->
			<nav class="cf">
				<?php include ("encabezado_inicio.php"); ?>
			</nav>
			<!-- ends nav -->
			
		</header>
		
		
		<!-- MAIN -->
		<div role="main" id="main" class="cf">
			
			<!-- page-content -->
			<div class="page-content">
				
				<!-- entry-content -->	
	        	<div class="entry-content cf">
					<h2 class="heading">Formulario de Registro</h2>
				<!-- form -->
				<form id="registroForm" action="funciones/registro_usuario.php" method="post">
					<fieldset>
														
						<p>
							<label for="name" >Nombre</label>
							<input name="name"  id="name" type="text" class="form-poshytip" title="Ingresa tu nombre completo" />
						</p>
						
						<p>
							<label for="email" >Email</label>
							<input name="email"  id="email" type="email" class="form-poshytip" title="Ingresa tu dirección de Correo Electrónico" />
						</p>
                        
                        <p>
							<label for="reemail" >Confirmación del Email</label>
							<input name="reemail"  id="reemail" type="email" class="form-poshytip" title="Ingresa tu dirección de Correo Electrónico" />
						</p>
						
						<p>
							<label for="clave">Clave</label>
							<input name="clave"  id="clave" type="password" class="form-poshytip" title="Ingresa tu sitio web" />
						</p>
						
                        <p>
							<label for="reclave">Confirmación de la Clave</label>
							<input name="reclave"  id="reclave" type="password" class="form-poshytip" title="Ingresa tu sitio web" />
						</p>
						
						<p><input type="submit" value="Registrar" name="submit" id="submit" /> <span id="error" class="warning">Message</span></p>
					</fieldset>
					
				</form>
				<!-- ENDS form -->
				
				
										
				</div>
				<!-- ENDS entry-content -->

			</div><!-- ENDS page-content -->
						
		</div>
		<!-- ENDS MAIN -->
		
		<footer>
		
			<?php include ("pie_inicio.php") ?>
			
		</footer>
		
		
	</div>
	<!-- ENDS WRAPPER -->
	
	<!-- JavaScript at the bottom for fast page loading -->
	
	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>
	
	<!-- scripts concatenated and minified via build script -->
	<script src="js/custom.js"></script>
	
	<!-- superfish -->
	<script  src="js/superfish-1.4.8/js/hoverIntent.js"></script>
	<script  src="js/superfish-1.4.8/js/superfish.js"></script>
	<script  src="js/superfish-1.4.8/js/supersubs.js"></script>
	<!-- ENDS superfish -->
	
	<script src="js/tweet/jquery.tweet.js" ></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.nivo.slider.js" ></script>
	<script src="js/css3-mediaqueries.js"></script>
	<script src="js/tabs.js"></script>
	<script  src="js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
	<script type="text/javascript" src="js/form-validation.js"></script>
	<!-- end scripts -->
	
	

</body>
</html>