<?php
get_header();
while ( have_posts() ) : the_post();	
	get_template_part( 'templates-parts/content/content', 'page' ); 
	if (is_page('uslugi')) :
		get_template_part( 'templates-parts/parts/uslugi' ); 
	endif;
	if(is_page(6)) {
		get_template_part( 'templates-parts/parts/slider' );
		get_template_part( 'templates-parts/parts/uslugi' );
		get_template_part( 'templates-parts/parts/about-us' );
	} elseif(is_page(8)) {
		get_template_part( 'templates-parts/parts/about-us-extended' );
		get_template_part( 'templates-parts/parts/about-us' );
	} elseif(is_page(16)) {
		get_template_part( 'templates-parts/parts/uslugi' ); 
	} elseif(is_page(28)) {
		get_template_part( 'templates-parts/parts/faq' );
	} elseif(is_page(12)) {
		get_template_part( 'templates-parts/parts/prices' );
	} elseif(is_page(10)) {
		get_template_part( 'templates-parts/parts/team' );
	} elseif(is_page(30)) {
		get_template_part( 'templates-parts/parts/gallery' );
	} 
endwhile;
get_footer();
