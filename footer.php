		</div> <!-- end content -->

		<footer class="clearfix">
			<div class="testimonials">

				<?php 
				$args = array( 'post_type' => 'quote' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>

					<blockquote><img src="<?php bloginfo(template_url) ?>/images/quotes.png"><?php the_content(); ?>
					<cite><?php the_title(); ?></cite>
					</blockquote>

				<?php endwhile; ?>

			</div>
			
			<a href="https://www.facebook.com/FlingJuggling" target="_blank"><button class="icon fb"></button></a>
				<?php wp_nav_menu( array( 'theme_location' => 'footer-nav' ) ); ?>
			
		</footer>	


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places"></script>
<!-- <script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/waypoints-sticky.min.js"></script> -->
<script type="text/javascript" src="<?php bloginfo(template_url) ?>/js/simpleCart.min.js"></script>
<script type="text/javascript" src="<?php bloginfo(template_url) ?>/js/main.js"></script>

	</div> <!-- end wrapper -->

</body>
</html>
