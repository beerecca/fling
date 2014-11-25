<?php 

function getThumbURL(){

	$thumb_id = get_post_thumbnail_id();
	$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
	if ( has_post_thumbnail() ) {
		echo $thumb_url[0];
	}

}

function register_my_menus() {
  register_nav_menus(
    array(
      'main-nav' => __( 'Main Nav' ),
      'footer-nav' => __( 'Footer Nav' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


add_theme_support( 'post-thumbnails' ); 