<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function enqueue_scripts() {
    wp_enqueue_script('dl-main', get_template_directory_uri().'/src/js/dl-main.js', array( 'jquery' ),'3', true );
    wp_enqueue_script('dl-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js',  array(), '20130456', true );
	wp_enqueue_script( 'dl-opinions', get_template_directory_uri() . '/src/js/opinions.js', array(), '20130457', true );
	wp_enqueue_script( 'dl-slider', get_template_directory_uri() . '/src/js/slider.js', array(), '20130457', true );

    if ( is_page(50) ) {
	 wp_enqueue_script( 'dl-home', get_template_directory_uri() . '/src/js/home-page.js', array(), '20130457', true );
	}
    
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
