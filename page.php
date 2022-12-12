<?php
get_header();
while ( have_posts() ) : the_post();	
	get_template_part( 'templates-parts/content/content', 'page' ); 
	if (is_page('uslugi')) :
		get_template_part( 'templates-parts/parts/uslugi' ); 
	endif;
endwhile;
get_footer();
