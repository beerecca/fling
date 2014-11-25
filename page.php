<?php get_header() ?>

	<?php if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('<p id="breadcrumbs">','</p>');
	} ?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<div class="panel clearfix">
			<h2><?php the_title() ?></h2>
			<p><?php the_content() ?></p>
		</div> <!-- end panel -->

	<?php endwhile; ?>

<?php get_footer() ?>