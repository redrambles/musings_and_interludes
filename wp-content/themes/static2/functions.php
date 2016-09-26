<?php
/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Twenty Fourteen 1.0
 */
function static2_scripts() {

	wp_enqueue_style( 'bootstrap_css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
  //wp_enqueue_style( 'fonts', get_stylesheet_directory_uri() . '/css/fonts.css');
  wp_enqueue_style( 'responsive', get_stylesheet_directory_uri() . '/css/responsive.css');
  wp_enqueue_style( 'font_awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');
  
  wp_enqueue_style( 'set2', get_stylesheet_directory_uri() . '/css/effects/set2.css');
  wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/css/effects/normalize.css');
  wp_enqueue_style( 'component', get_stylesheet_directory_uri() . '/css/effects/component.css');
  
	// Load our main stylesheet.
	wp_enqueue_style( 'static2-style', get_stylesheet_uri() );
  
  
  wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '20150315', true );
	wp_enqueue_script('masonry');
	wp_enqueue_script( 'imagesloaded', get_stylesheet_directory_uri() . '/js/effects/imagesloaded.js', array( 'masonry jquery' ), true );
	wp_enqueue_script( 'classie', get_stylesheet_directory_uri() . '/js/effects/classie.js', array( 'jquery' ), true );
	wp_enqueue_script( 'AnimOnScroll', get_stylesheet_directory_uri() . '/js/effects/AnimOnScroll.js', array( 'jquery' ), true );
	wp_enqueue_script( 'modernizr', get_stylesheet_directory_uri() . '/js/effects/modernizr.custom.js', array( 'jquery' ), true );
		
  wp_enqueue_script( 'nav-js', get_stylesheet_directory_uri() . '/js/nav.js', array( 'jquery' ), '', true );
  wp_enqueue_script( 'maps-js', get_stylesheet_directory_uri() . '/js/maps.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery masonry' ), '20150315', true );
	wp_enqueue_script( 'jquery-contact-js', get_stylesheet_directory_uri() . '/js/jquery.contact.js', array( 'jquery' ), '', true );

	// Load the Internet Explorer specific stylesheet.
	// wp_enqueue_style( 'static2-ie', get_template_directory_uri() . '/css/ie.css', array( 'stati2-style' ), '20131205' );
	// wp_style_add_data( 'static2-ie', 'conditional', 'lt IE 9' );
  // 
	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }

	// if ( is_singular() && wp_attachment_is_image() ) {
	// 	wp_enqueue_script( 'static2-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20130402' );
	// }

	// if ( is_active_sidebar( 'sidebar-3' ) ) {
	// 	wp_enqueue_script( 'jquery-masonry' );
	// }

	// if ( is_front_page() && 'slider' == get_theme_mod( 'featured_content_layout' ) ) {
	// 	wp_enqueue_script( 'static2-slider', get_template_directory_uri() . '/js/slider.js', array( 'jquery' ), '20131205', true );
	// 	wp_localize_script( 'static2-slider', 'featuredSliderDefaults', array(
	// 		'prevText' => __( 'Previous', 'static22' ),
	// 		'nextText' => __( 'Next', 'static22' )
	// 	) );
	// }
  // 
	// wp_enqueue_script( 'static2-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150315', true );
}
add_action( 'wp_enqueue_scripts', 'static2_scripts' );