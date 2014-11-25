<!DOCTYPE html>
<html>
<head>
	<title>Fling | New Zealand's Specialist Juggling and Circus Equipment Suppliers</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo(stylesheet_url); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
</head>

<body onload="initialize()">
	<div class="wrapper">
		
		<header>
			<div class="branding">
				<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo(template_url) ?>/images/logo.png" alt="Fling"></a>
				<h1>New Zealand's Specialist Juggling and Circus Equipment Suppliers</h1>
			</div>

			<nav class="clearfix">
			<!-- <img class="logo-small" src="<?php bloginfo(template_url) ?>/images/logo_small.png"> -->
				
				<?php wp_nav_menu( array( 'theme_location' => 'main-nav' ) ); ?>
				
				<a class="cart clearfix" href="<?php echo home_url(); ?>/cart">
					<img src="<?php bloginfo(template_url) ?>/images/cart.png" alt="">
					<p>x<span class="simpleCart_quantity"></span></p>
				</a>
				<?php get_search_form(); ?>
				
			</nav>
		</header>

		<div class="content clearfix">