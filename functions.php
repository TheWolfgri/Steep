<?php



function add_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

  add_theme_support( 'custom-logo', array(
  	'height'      => 100,
  	'width'       => 400,
  	'flex-height' => true,
  	'flex-width'  => true,
  	'header-text' => array( 'site-title', 'site-description' ),
  ) );

	function wpc_theme_support() {
		add_theme_support('custom-logo_bas', array(
			'flex-height' => true,
			'flex-width'  => true,
		));
	}
	add_action('after_setup_theme','wpc_theme_support');



  function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

	/* Autoriser les fichiers SVG */
function wpc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');


/*add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 100, 10, true );*/

function wpdocs_setup_theme() {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 50, 50 );
		add_image_size ('category-thumb', 300, 10); // 300 pixels de large (et hauteur illimitée)
}
add_action( 'after_setup_theme', 'wpdocs_setup_theme' );

/*SIZZ limit */
function wpdocs_custom_excerpt_length( $length ) {
    return 32;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


/*312 pixels par 167*/


?>
