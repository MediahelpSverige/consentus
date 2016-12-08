<html>
<head>
	<meta charset="UTF-8">
		<title><?php bloginfo ( 'name' ); ?></title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-1.12.0.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/parallax.min.js"></script>
<!--Custom stylesheet-->
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/style.css">

<!-- Optional theme -->
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/custom.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/base.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/responsive.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Cardo|Crimson+Text:400,400italic,700' rel='stylesheet' type='text/css'>
<script src="//use.edgefonts.net/passion-one:n4,n7,n9;neuton;source-sans-pro.js"></script>
<script src="<?php bloginfo('template_url'); ?>/bin/app.bundle.js" charset="utf-8"></script>


<?php wp_head(); ?>
</head>
<body>

<header id="top-menu">
	<div id="logo-wrap">
<div class="flexwrapper">
<div class="top-header-logo">
<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 ?>
	<a href="<?php bloginfo('url'); ?>"><img src="<?php echo $image[0]; ?>"></a>
	</div>
	<div class="nav-menu"><?php wp_nav_menu( array( 'theme_location' => 'main_nav', 'menu_class' => 'nav-menu', 'menu_class' => 'site_nav', 'container_class' => 'menu-main-menu-container') ); ?></div>
	</div>
	<div style="clear:both;"></div>
		<div class="menu-toggle">
		<span class="glyphicon glyphicon-menu-hamburger
"></span>

	</div>
	</div>
</div>
</div>

</header>
