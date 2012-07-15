<!DOCTYPE html>
<html lang="<?php print get("webLang"); ?>">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php print $this->getTitle(); ?></title>
		
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<link href="<?php print path("vendors/css/frameworks/bootstrap/bootstrap.min.css", "zan"); ?>" rel="stylesheet">
		<link href="<?php print $this->themePath; ?>/css/style.css" rel="stylesheet">
		<link href="<?php print $this->themePath; ?>/css/bootstrap.css" rel="stylesheet">
		<script src="<?php print $this->themePath; ?>/js/jquery.js"></script>
		<script src="<?php print $this->themePath; ?>/js/bootstrap.min.js"></script>
		<script src="<?php print $this->themePath; ?>/js/bootstrap-transition.js"></script>
		<script src="<?php print $this->themePath; ?>/js/bootstrap-tooltip.js"></script>
		
		<script src="<?php print $this->themePath; ?>/js/functions.js"></script>
		<?php print $this->getCSS(); ?>
		
		<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
			<!--[if lt IE 9]>
			  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
		<!-- Le styles -->
	</head>

	<body>
		<div class="topbar">
			<div class="fill">
				<div class="container">
					<a class="brand" href="<?php print get("webURL");?>">Hackat&oacute;n por los derechos de la infancia</a>
					
					<ul class="nav">
						<li class="active"><a href="<?php print get("webURL");?>">Home</a></li>
						<li><a href="<?php print path("muestras");?>">Muestras</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="content">
				<div class="page-header">
					<h1>Hackatón <small>deserción escolar por estado</small></h1>
				</div>
				
				<div class="row">
