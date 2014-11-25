<?php get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s' ), get_search_query() ); ?></h1>
			</header><!-- .page-header -->

				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post(); ?>

						<div class="panel">
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<p><?php the_content(); ?></p>
						</div>

					<?php endwhile;

				else :
					
					echo "<header class='page-header'><h1 class='page-title'>Search Results</h1></header><div class='panel'>Sorry no results found.</div>";

				endif;
			?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_footer();
