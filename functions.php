<?php
add_theme_support('post-thumbnails');
add_post_type_support( 'page', 'excerpt' );
add_image_size( 'icon', 45, 45, array( 'center', 'center' ) );
add_image_size( 'person', 175, 175, array( 'center', 'center' ) );
add_image_size( 'gallery', 250, 220, array( 'center', 'center' ) );

if ( ! function_exists( 'dev_register_nav_menu' ) ) {
    function dev_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'dl' ),
        ) );
    }
    add_action( 'after_setup_theme', 'dev_register_nav_menu', 0 );
}

require_once get_template_directory() . '/func/enqueue-styles.php';
require_once get_template_directory() . '/func/enqueue-scripts.php';
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
