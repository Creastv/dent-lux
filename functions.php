<?php
add_theme_support('post-thumbnails');
add_post_type_support( 'page', 'excerpt' );
add_image_size( 'logo', 200, 62, array( 'center', 'center' ) );
add_image_size( 'oferta', 425, 190, array( 'center', 'center' ) );

if ( ! function_exists( 'dev_register_nav_menu' ) ) {
    function dev_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'dl' ),
        ) );
    }
    add_action( 'after_setup_theme', 'dev_register_nav_menu', 0 );
}
function dl_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'dl' ),
		'id'            => 'footer-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title-fo">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2', 'dl' ),
		'id'            => 'footer-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title-fo">',
		'after_title'   => '</h4>',
	) );
    register_sidebar( array(
		'name'          => __( 'Sidebar', 'dl' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title-fo">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'dl_widgets_init' );

function dev_scripts() {
	wp_enqueue_style( 'dl-style', get_stylesheet_uri() );
	wp_enqueue_style( 'dl-custome-style', get_template_directory_uri().'/src/css/dl-main.min.css' ); 
	wp_enqueue_script('dl-main', get_template_directory_uri().'/src/js/dl-main.js', array( 'jquery' ),'3', true );
	
    wp_enqueue_style( 'dl-svipeer_css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css' );
    wp_enqueue_script('dl-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js',  array(), '20130456', true );
	wp_enqueue_script( 'dl-opinions', get_template_directory_uri() . '/src/js/opinions.js', array(), '20130457', true );
	wp_enqueue_script( 'dl-slider', get_template_directory_uri() . '/src/js/slider.js', array(), '20130457', true );
	if ( is_page(50) ) {
	 wp_enqueue_script( 'dl-home', get_template_directory_uri() . '/src/js/home-page.js', array(), '20130457', true );
	}
}
add_action( 'wp_enqueue_scripts', 'dev_scripts' );
require get_template_directory() . '/func/clean-up.php';
require get_template_directory() . '/func/cpt.php';

if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page( array(
		'page_title' => 'Dent-lux',
		'menu_title' => 'Dent-lux',
		'menu_slug'  => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect'   => false
	) );

}
