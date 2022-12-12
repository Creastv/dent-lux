
    <?php if ( is_category() ) :
	   single_cat_title();					
	elseif (is_404()) :
		_e( '404', 'dl');
	elseif (is_page() ) :
		the_title();
	elseif ( is_tag() ) :
		single_tag_title();
	elseif ( is_author() ) :
		the_post();
		printf( __( '%s', 'dl' ), get_the_author() );
		rewind_posts();
	elseif ( is_day() ) :
		printf( __( 'Dzień: %s', 'dl' ), '<span>' . get_the_date() . '</span>' );
	elseif ( is_month() ) :
		printf( __( 'Miesiąc: %s', 'dl' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
	elseif ( is_year() ) :
		printf( __( 'Rok: %s', 'dl' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
	elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
		_e( 'Asides', 'dl' );
	elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
		_e( 'Images', 'dl');
	elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
		_e( 'Videos', 'dl' );
	elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
		_e( 'Quotes', 'dl' );
	elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
		_e( 'Links', 'dl' );
	else :
		_e( 'Blog', 'dl' );
    endif; ?>