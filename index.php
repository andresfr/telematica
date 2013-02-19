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
	
	
	<link rel="stylesheet" media="screen" href="css/superfish.css" /> 
	<link rel="stylesheet" href="css/nivo-slider.css" media="all"  /> 
	<link rel="stylesheet" href="css/tweet.css" media="all"  />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" media="all" href="css/lessframework.css"/>
	
	
	<!-- All JavaScript at the bottom, except this Modernizr build.
	   Modernizr enables HTML5 elements & feature detects for optimal performance.
	   Create your own custom Modernizr build: www.modernizr.com/download/ -->
<script src="js/modernizr-2.5.3.min.js"></script>
<style type="text/css">
#apDiv1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 699px;
	top: 16px;
}
</style>
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
                <div id="apDiv1"><form id="loginForm" class="loginFormu" action="funciones/verificar.php" method="post">
			    <fieldset>
				<?php session_start(); if (!isset($_SESSION["usuario"]))
						{?>
								<div align="center">
                                <h5 class="title-divider">Inicio de Sesión</h5>
                                </div>
                                <label><h6>*Usuario</h6></label>
                                <div align="right">
								  <input name="name"  id="name" type="text" class="form-poshytip" title="Ingresa tu Correo Electrónico" />
									
								</div>
								
                                <label><h6>*Clave</h6></label>
                                <div align="center">
							  <input name="clave"  id="clave" type="password" class="form-poshytip" title="Ingresa tu Clave" />
                                    <br />
								<span id="error" class="warning"></span>
								<p><input name="submit" type="submit" id="submit" value="Entrar" /> </p>
				<?php } else { ?>
						<a href="usuarioreg/index.php?num=1">Volver a mi cuenta</a>
						<?php }?>
								
	    </fieldset>
							
			  </form></div>

		  </div>
			
			<!-- nav -->
			<nav class="cf">
				<?php include ("encabezado_inicio.php"); ?>
			</nav>
			<!-- ends nav -->
			
		</header>
		
		
		<!-- MAIN -->
		<div role="main" id="main" class="cf">
			<!-- SLIDER -->
			<div class="slider-wrapper theme-halftone">
	            <div id="slider" class="nivoSlider">
	                <img src="img/dummies/slides/01.jpg" alt=""  />
	                <img src="img/dummies/slides/02.jpg" alt="" />
	                <img src="img/dummies/slides/03.jpg" alt="" />
	            </div>
	            <div class="slider-left"></div>
	            <div class="slider-right"></div>
	        </div>
			<!-- ENDS SLIDER -->
			
			
			<!-- headline -->
			<div class="headline">LOS MÁS VOTADOS</div>
			<!-- ENDS headline -->
			
  			
			<!-- featured -->
			<ul class="feature cf">
				<li>
					<a href="img/dummies/img1.jpg" class="thumb" >
						<img src="img/dummies/img1.jpg" alt="Thumbnail" />
						<div class="date"><span class="m"></span>ENE<span class="d">13</span></div>
					</a>
					<a href="img/dummies/img1.jpg"  class="excerpt">Mi guitarra lloraba por mi</a>
					<div class="categories">Me hizo falta luego de mi gira internacional</div>
				</li>
				
				<li>
					<a href="img/dummies/img2.jpg" class="thumb" >
						<img src="img/dummies/img2.jpg" alt="Thumbnail" />
						<div class="date"><span class="m">ENE</span><span class="d">13</span></div>
					</a>
					<a href="img/dummies/img2.jpg"  class="excerpt">Mis Tardes Tristes</a>
					<div class="categories">La ciudad en epoca de invierno (Parque principal)</div>
				</li>
				
				<li>
					<a href="img/dummies/img3.jpg" class="thumb" >
						<img src="img/dummies/img3.jpg" alt="Thumbnail" />
						<div class="date"><span class="m">ENE</span><span class="d">13</span></div>
					</a>
					<a href="img/dummies/img3.jpg"  class="excerpt">Contrastes</a>
					<div class="categories">Nuevos implementos de mi cocina :D</div>
				</li>
			</ul>
			<!-- ENDS featured -->
			
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