<?php

require get_template_directory() . '/includes/blocks.php';

function admin_styles() {
    wp_enqueue_style('admin-css', get_template_directory_uri().'/assets/css/admin-defaults.css', array(), '');
}
add_action('admin_enqueue_scripts', 'admin_styles');

function web_scripts() {
// Include Styles
    wp_enqueue_style('fonts_roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap', array(), null, '');
    wp_enqueue_style('fonts_work_sans', 'https://fonts.googleapis.com/css2?family=Work+Sans:wght@600;700&display=swap', array(), null, '');
	wp_enqueue_style('owl_carousel_css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), null, '');
	wp_enqueue_style('owl_carousel_theme_css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), null, '');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), null, '');

// Include Scripts
	wp_enqueue_script('owl_carousel_js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), null, '');
	wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, '');
}
add_action('wp_enqueue_scripts', 'web_scripts');

// Theme Support
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support( 'custom-logo' );

// Register menus
register_nav_menus(array(
	'header-menu' => __( 'Header menu' )
));

// Get logo image
function theme_get_custom_logo(){
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	if ( has_custom_logo() ) {
		echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';	
	} else {
		echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/img/logo.png' ) . '" alt="' . get_bloginfo( 'name' ) . '">';
	}
}