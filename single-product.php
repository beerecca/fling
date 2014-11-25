<?php get_header() ?>

<?php get_sidebar() ?>

	<div class="sub-content clearfix">
	<?php if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('<p id="breadcrumbs">','</p>');
	} ?>
		
		<div class="simpleCart_shelfItem">



		<h2 class="detail-title item_name"><?php the_title(); ?></h2>
		<h2 class="detail-price item_price"><?php echo get_post_meta($post->ID,'price',true) ?></h2>

		<?php 
			while ( have_posts() ) : the_post();
		?>

		<div class="detail-panel clearfix">
			<div class="detail-image">
				<img class="item_thumb" src="
					<?php getThumbURL();?>
				" thumb="
					<?php getThumbURL();?>
				">
				<img class="secret" src="
					<?php getThumbURL();?>
				" thumb="					
					<?php getThumbURL();?>
				">			
			</div>

			<div class="detail-text">		
				<h4>Description</h4>
				<p><?php the_content(); ?></p>
				<div class="detail-action">
					<h4>Add to Wishlist</h4>
					<button class="icon fav"></button>
				</div>
				<div class="detail-action">
					<h4>Quantity:</h4>
					<input type="text" class="item_Quantity" name="quantity" value="1">
					<button><a class="item_add" href="javascript:;">Add to Cart</a></button>
				</div>
			</div> <!-- end detail-text -->		
		</div> <!-- end detail-panel -->
	
		<?php 
			endwhile;
		?>




		</div>



	</div> <!-- end sub-content -->

<?php get_footer() ?>