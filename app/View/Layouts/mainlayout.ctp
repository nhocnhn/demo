<!DOCTYPE HTML>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title><?php echo $title_for_layout; ?></title>
		<?php
			echo $this->Html->meta(array('name'=>'viewport','content'=>'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'));
			
			echo $this->Html->meta('icon');
			
			echo $this->Html->css(array(
										'animate.css',
										'bootstrap.css',
										"font-awesome.min.css",
										"owl.carousel.css",
										'owl.theme.css',
										'prettyPhoto.css',
										'smoothness/jquery-ui-1.10.4.custom.min.css',
										'/rs-plugin/css/settings.css',
										'theme.css',
										'colors/turquoise.css',
										'responsive.css',
										'http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600,700'
										));
			
			echo $this->Html->script(array(
											'jquery-1.11.0.min.js',
											'bootstrap.min.js',
											'bootstrap-hover-dropdown.min.js',
											'owl.carousel.min.js',
											'jquery.parallax-1.1.3.js',
											'jquery.nicescroll.js',
											'jquery.prettyPhoto.js',
											'jquery-ui-1.10.4.custom.min.js',
											'jquery.jigowatt.js',
											'jquery.sticky.js',
											'waypoints.min.js',
											'jquery.isotope.min.js',
											'jquery.gmap.min.js',
											'http://maps.google.com/maps/api/js?sensor=false',
											'/rs-plugin/js/jquery.themepunch.plugins.min.js',
											'/rs-plugin/js/jquery.themepunch.revolution.min.js',
											'custom.js'
											));
			

			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
		
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]><?php
	echo $this->Html->script(array(
									'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js',
									'https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js'
									));
?>
<![endif]-->
</head>

<body>
<?php 
	echo $this->element("TopHeader");
	echo $this->element("Header");  
	
	echo $this->Session->flash();
	echo $this->fetch('content');	
	
	echo $this->element("Footer");
	echo $this->element("GoTopButton");
?>
</body>
</html>