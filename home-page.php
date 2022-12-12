<?php
/**
*
* Template name: Home page
* Template Post Type:  page
*/
get_header();
echo '<article>';
get_template_part( 'templates-parts/parts/uslugi' );
get_template_part( 'templates-parts/parts/banner' );
echo '</article>';
get_footer();
