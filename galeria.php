<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	
	
	<title>HalfTone Template</title>
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
					
					<li class="dribbble"><a href="http://www.dribbble.com/ansimuz"  title="Dribbble" ></a></li>
					<li class="facebook"><a href="http://www.facebook.com/pages/Ansimuz/224538697564461"  title="Facebook" ></a></li>
					<li class="forrst"><a href="http://forrst.me/ansimuz"  title="forrst" ></a></li>
					<li class="googleplus"><a href="https://plus.google.com/109030791898417339180/posts"  title="googleplus" ></a></li>
					<li class="twitter"><a href="https://twitter.com/ansimuz"  title="twitter" ></a></li>
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
			
			<!-- featured -->
			<ul class="work-list cf">
            <h2 class="heading">&nbsp;&nbsp;Galeria</h2>
            <div class="block-divider"></div>
				<li>
					<a href="project.html" class="thumb" >
						<img src="img/dummies/t1.jpg" alt="Thumbnail" />
						<div class="img-overlay"><i class="icon-plus-sign"></i></div>
					</a>
					<a href="project.html"  class="excerpt">Pellentesque habitant morbi tristique senectus</a>
					<div class="categories"><a href="#" >webdesign, </a><a href="#" >print, </a><a href="#" >photo, </a></div>
				</li>
				
				<li>
					<a href="project.html" class="thumb" >
						<img src="img/dummies/t2.jpg" alt="Thumbnail" />
						<div class="img-overlay"><i class="icon-plus-sign"></i></div>
					</a>
					<a href="project.html"  class="excerpt">Pellentesque habitant morbi tristique senectus</a>
					<div class="categories"><a href="#" >webdesign, </a><a href="#" >print, </a><a href="#" >photo, </a></div>
				</li>
				
				<li>
					<a href="project.html" class="thumb" >
						<img src="img/dummies/t3.jpg" alt="Thumbnail" />
						<div class="img-overlay"><i class="icon-plus-sign"></i></div>
					</a>
					<a href="project.html"  class="excerpt">Pellentesque habitant morbi tristique senectus</a>
					<div class="categories"><a href="#" >webdesign, </a><a href="#" >print, </a><a href="#" >photo, </a></div>
				</li>
				
				<li>
					<a href="project.html" class="thumb" >
						<img src="img/dummies/t1.jpg" alt="Thumbnail" />
						<div class="img-overlay"><i class="icon-plus-sign"></i></div>
					</a>
					<a href="project.html"  class="excerpt">Pellentesque habitant morbi tristique senectus</a>
					<div class="categories"><a href="#" >webdesign, </a><a href="#" >print, </a><a href="#" >photo, </a></div>
				</li>
				
				<li>
					<a href="project.html" class="thumb" >
						<img src="img/dummies/t2.jpg" alt="Thumbnail" />
						<div class="img-overlay"><i class="icon-plus-sign"></i></div>
					</a>
					<a href="project.html"  class="excerpt">Pellentesque habitant morbi tristique senectus</a>
					<div class="categories"><a href="#" >webdesign, </a><a href="#" >print, </a><a href="#" >photo, </a></div>
				</li>
				
				<li>
					<a href="project.html" class="thumb" >
						<img src="img/dummies/t3.jpg" alt="Thumbnail" />
						<div class="img-overlay"><i class="icon-plus-sign"></i></div>
					</a>
					<a href="project.html"  class="excerpt">Pellentesque habitant morbi tristique senectus</a>
					<div class="categories"><a href="#" >webdesign, </a><a href="#" >print, </a><a href="#" >photo, </a></div>
				</li>
				
				
			</ul>
			<!-- ENDS featured -->
						
		</div>
		<!-- ENDS MAIN -->
		
		<footer>
		
			<?php include ("pie_inicio.php"); ?>
			
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
	<!-- end scripts -->

</body>
</html>