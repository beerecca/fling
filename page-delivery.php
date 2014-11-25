<?php get_header() ?>

	<?php if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('<p id="breadcrumbs">','</p>');
	} ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<h2><?php the_title(); ?></h2>
		<p><?php the_content(); ?></p>

	<?php endwhile; ?>

	<form>
		<label>First Name:</label><input type="text" placeholder="James" name="firstname"><br>
		<label>Last Name:</label><input type="text" placeholder="Woods" name="lastname"><br>
		<label>Email:</label><input type="text" placeholder="james@email.com" name="email"><br>
		<label>Phone Number:</label><input type="text" placeholder="09 3459087" name="phone"><br>
		<label>Address Lookup:</label><input id="autocomplete" placeholder="13 Quee..." onFocus="geolocate()" type="text"></input><br>
		<label>Street Address:</label><input class="field" id="street_number" disabled="true"></input><input class="field" id="route" disabled="true"></input><br>
		<label>City:</label><input class="field" id="locality" disabled="true"></input><br>
		<label>Region:</label><input class="field" id="administrative_area_level_1" disabled="true"></input><br>
		<label>Postcode:</label><input class="field" id="postal_code" disabled="true"></input><br>
		<label>Country:</label><input class="field" id="country" disabled="true"></input><br>		
		<button><a href="javascript:;" class="simpleCart_checkout">Continue to Paypal</a></button>
	</form>
	<p><a href="#">&lt; Keep Shopping</a></p>

<?php get_footer() ?>