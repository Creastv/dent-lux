<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
function enqueue_styles() {
    wp_enqueue_style( 'dl-style', get_stylesheet_uri() );
	wp_enqueue_style( 'dl-custome-style', get_template_directory_uri().'/src/css/dl-main.min.css' ); 
     wp_enqueue_style( 'dl-svipeer_css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css' );
    // if(is_page(array(10))){ //home
    // }
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
