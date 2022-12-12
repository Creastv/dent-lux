<?php
$title = get_field('naglowek_strony'); 
$subtitle= get_field('opis_pod_naglowkiem');
?>
<article id="post-<?php the_ID(); ?>" class="hentry" <?php post_class(); ?>>
    <?php if($title) { ?>
    <header class="title-page-wraper">
        <h1 class="entry-title title-page">
            <?php get_template_part( 'templates-parts/header/header', 'title' ); ?> 
        </h1>
        <svg class="sep" xmlns="http://www.w3.org/2000/svg" width="162" height="2" viewBox="0 0 162 2">
            <rect id="Rectangle_4" data-name="Rectangle 4" width="111" height="2" fill="#f6b846"/>
            <rect id="Rectangle_4_copy" data-name="Rectangle 4 copy" width="43" height="2" transform="translate(119)" fill="#f6b846"/>
        </svg>
        <?php if($title) { ?>
        <p><?php echo $subtitle; ?></p>
        <?php } ?>
        <svg class="brand-svg" xmlns="http://www.w3.org/2000/svg" width="1270" height="354" viewBox="0 0 1270 354">
        <text id="Dent-Lux" transform="translate(635 291)" fill="#58585a" font-size="294.406" font-family="Lato-Black, Lato" font-weight="800" opacity="0.051"><tspan x="-634.152" y="0">Dent-Lux</tspan></text>
        </svg>
    </header>
    <?php } ?>
    <div class="entry-wraper">
        <?php get_template_part( 'templates-parts/parts/sidebar' );  ?>
        <div class="entry-content">
            <?php the_content(); ?>
            <div class="entry-footer">
                <div classs="entry-footer__col">
                    <?php echo do_shortcode('[addtoany]'); ?>
                </div>
                <div classs="entry-footer__col">
                    <?php echo kk_star_ratings();?>
                </div>
            </div>
        </div>
    </div>
   
</article>
