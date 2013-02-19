<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
		
	<title>.:PicBook:.</title>
	<meta name="description" content="">
	
	<!-- Mobile viewport optimized: h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width">
	
	
	<link rel="stylesheet" media="screen" href="../css/superfish.css" /> 
	<link rel="stylesheet" href="../css/nivo-slider.css" media="all"  /> 
	<link rel="stylesheet" href="../css/tweet.css" media="all"  />
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" media="all" href="../css/lessframework.css"/>
	
	
	<!-- All JavaScript at the bottom, except this Modernizr build.
	   Modernizr enables HTML5 elements & feature detects for optimal performance.
	   Create your own custom Modernizr build: www.modernizr.com/download/ -->
<script src="../js/modernizr-2.5.3.min.js"></script>
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
				<a href="index.php" ><img src="../img/logo.png" alt="" /></a>
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
					<h2 class="heading">Subida de Imagen</h2>
				<!-- form -->
						<script type="text/javascript" src="../js/form-validation.js"></script>
                        <script type="text/javascript" src="../js/upimage.js"></script>
          		<div id="side-content2">
                        <canvas id="previewcanvas" height="10" >
                        	
                        </canvas>
                        <img id="imgIcono" src="../img/dummies/icono_imagen.png" width="500" height="500"/>
                     </div>
                     <div id="sidebar2" >
						<form id="InfoMarcadorForm" action="funciones/registro_imagen.php"  method="post" enctype="multipart/form-data">  
							<fieldset>
								<div>
								<label>*Nombre de la imagen </label>
								<input name = "nombreimg" id = "nombreimg" type="text" style="width:350px;" title = "Pon un nombre a la imagen" />
								</div>
								<div>
								<label>*Descripción de la imagen </label>
								<input name = "descimg" id = "descimg" type="text" style="width:350px;" title = "Pon una descripción a la imagen" />
								</div>
								<div>
                                	<label>*Imagen de tu marcador (Max 5mb)</label>
									<input name="imageUpload" id="imageUpload" onChange="return ShowImagePreview( this.files );" type="file" class="form-poshytip" title="Busca la imagen de tu marcador" style="width:350px;
    height:35px;
    background:#efefef;
    border:1px solid #dedede;
    padding:10px;
    margin-top:3px;
    font-size:0.9em;
    color:#3a3a3a;
    border-radius:5px;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;"/>
									
								</div>
                                <span id="error" class="warning">Message</span>
								<p><input name="submit" type="submit" id="submit" value="Enviar"/> 
							</fieldset>
							
						</form>
                     </div>
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
	<script>window.jQuery || document.write('<script src="../js/jquery-1.7.1.min.js"><\/script>')</script>
	
	<!-- scripts concatenated and minified via build script -->
	<script src="../js/custom.js"></script>
	
	<!-- superfish -->
	<script  src="../js/superfish-1.4.8/js/hoverIntent.js"></script>
	<script  src="../js/superfish-1.4.8/js/superfish.js"></script>
	<script  src="../js/superfish-1.4.8/js/supersubs.js"></script>
	<!-- ENDS superfish -->
	
	<script src="../js/tweet/jquery.tweet.js" ></script>
	<script src="../js/jquery.isotope.min.js"></script>
	<script src="../js/jquery.nivo.slider.js" ></script>
	<script src="../js/css3-mediaqueries.js"></script>
	<script src="../js/tabs.js"></script>
	<script  src="../js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
    <script type="text/javascript" src="../js/form-validation.js"></script>
	<!-- end scripts -->


</body>
</html>