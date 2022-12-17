<?php
/**
*
* Template name: Sidebar left
* Template Post Type:  page
*/
$sidebar = get_field('sidebar_left', 'options');
get_header();
while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" class="hentry" <?php post_class(); ?>>
    <?php get_template_part( 'templates-parts/header/header', 'title' ); ?>
    <div class="entry-wraper">
        <aside>
            <?php if($sidebar) {?>
            <?php foreach($sidebar['menus'] as $menu) { ?>
            <div class="menu">
                <p class="h2"><?php echo $menu['title'];?></p>
                <?php echo $menu['menu'];?>
            </div>
            <?php if($sidebar['desc']) { ?>
            <div class="banner">
                <?php echo $sidebar['desc'];?>
            </div>
            <?php } ?>
            <?php } ?>
            <?php } ?>
        </aside>
        <div class="content-wraper">
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
            <?php
			if(is_page(28)) {
			get_template_part( 'templates-parts/parts/faq' );
			} elseif(is_page(12)) {
			get_template_part( 'templates-parts/parts/prices' );
			} elseif(is_page(10)) {
			get_template_part( 'templates-parts/parts/team' );
			} elseif(is_page(30)) {
			get_template_part( 'templates-parts/parts/gallery' );
			}
			?>
            <div class="entry-footer">
                <div classs="entry-footer__col">
                    <span>Twoja ocena:</span>
                    <?php echo kk_star_ratings();?>
                </div>
                <div classs="entry-footer__col">
                    <span>Udostępnij:</span>
                    <?php echo do_shortcode('[addtoany]'); ?>
                </div>
            </div>
        </div>
    </div>
</article>

<?php endwhile;
get_footer();
