<?php get_header() ?>

	<div class="promo clearfix">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="promo-img">
				<?php 
					$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src($thumb_id,'large', true);
					if ( has_post_thumbnail() ) {
						echo '<img src="'.$thumb_url[0].'">';
				}?>
			</div>
			<div class="promo-text">

			<?php the_content(); ?>
			
		<?php endwhile; endif; ?>

		</div> <!-- end promo-text -->
	</div> <!-- end promo -->


	<h2>Featured</h2>
	<div class="home">

	<?php 
		$args = array( 'post_type' => 'product', 'category_name' => 'featured' );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
	?>


			<div class="product">
				<a href="<?php the_permalink(); ?>">
					<?php 
						$thumb_id = get_post_thumbnail_id();
						$thumb_url = wp_get_attachment_image_src($thumb_id,'medium', true);
						if ( has_post_thumbnail() ) {
							echo '<img src="'.$thumb_url[0].'">';
					}?>
				</a>
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<p class="price"><?php 
					
					$oldPrice = get_post_meta($post->ID,'old_price',true);
					if ($oldPrice) {
					echo '<span class="price-old">'.get_post_meta($post->ID,'old_price',true).'</span>';
					}
				
				?><?php echo get_post_meta($post->ID,'price',true) ?></p>
				<a href="<?php the_permalink(); ?>"><button>View</button></a>
				<button class="icon fav"></button>
			</div> <!-- end product -->

	<?php 
		endwhile;
	?>
	</div>
<?php get_footer() ?> 