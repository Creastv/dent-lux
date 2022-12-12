<?php
/**
*
* Template name: Usługa
* Template Post Type:  page
*/
get_header();
get_header();
while ( have_posts() ) : the_post();
	get_template_part( 'templates-parts/content/content', 'page-sidebar' ); 		
endwhile;
get_footer();

get_footer();
