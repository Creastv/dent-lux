<?php
/**
*
* Template name: Home page
* Template Post Type:  page
*/
get_header();
echo '<article>';
if(is_page(6)) {
get_template_part( 'templates-parts/parts/uslugi' );
get_template_part( 'templates-parts/parts/about-us' );
} else {
    
}
echo '</article>';
get_footer();
