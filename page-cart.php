<?php get_header() ?>
			
	<?php while ( have_posts() ) : the_post(); ?>

		<div class="overlay">
			<div class="terms-text">
				<div class="exit">X</div>
				<?php the_content(); ?>
			</div>
		</div>
					

		<?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<p id="breadcrumbs">','</p>');
		} ?>

		<h2><?php the_title(); ?></h2>

	<?php endwhile;?>

	<div class="simpleCart_items clearfix"></div>			

	<div class="cart-details">	
		<p>Subtotal: <span class="simpleCart_total"></span></p>
		<div class="cart-delivery">
			<p>Delivery:</p>
			<select id="delivery-options">
				<option value="standard" data-cost="15">Standard NZ ($15)</option>
				<option value="rural" data-cost="20">Rural NZ ($20)</option>
				<option value="international" data-cost="40">International ($40)</option>
			</select>
		</div>
		<p>Total: <span class="simpleCart_grandTotal"></span></p>
		<p><input type="checkbox" name="terms" value="terms"> I agree to the <a class="terms-activate" href="#">terms and refund policy</a></p>
		<a href="<?php echo home_url(); ?>/delivery"><button class="submit" disabled>Checkout</button></a>
		<p><a href="#">&lt; Keep Shopping</a></p>
	</div>

<?php get_footer() ?>

