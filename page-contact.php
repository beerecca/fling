<?php get_header() ?>
	
	<!-- <body onload="initialize()"> -->
	
	<?php if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('<p id="breadcrumbs">','</p>');
	} ?>

	<?php while ( have_posts() ) : the_post(); ?>

	<h2><?php the_title(); ?></h2>
	<p><?php the_content(); ?></p>

	<?php endwhile; ?>

	<div class="contact-info"> <!-- BEX HOW TO ADD CUSTOM FIELD TO A SPECIALIZED FIELD TEMPLATE -->
		<p><strong>Write to us:</strong></p>
		<p>P.O Box 96</p>
		<p>Otaki</p>
		<p>Kapiti 5542</p>
		<p>New Zealand</p>
		<p>&nbsp;</p>
		<p><strong>Call us:</strong></p>
		<p>(021) 136 4647</p>
		<p>(0800) JUGGLE</p>
	</div>


<?php get_footer() ?>