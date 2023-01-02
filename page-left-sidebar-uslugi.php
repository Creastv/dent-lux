<?php
/**
*
* Template name: Usługa
* Template Post Type:  page
*/
$sidebar = get_field('sidebar_uslugi', 'options');
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
            <?php } ?>
            <?php if($sidebar['desc']) { ?>
            <?php echo $sidebar['desc'];?>
            <?php } ?>
            <?php } ?>
        </aside>
        <div class="content-wraper">
            <div class="entry-content">
                <?php the_post_thumbnail('medium', array('class' => 'float-left')); ?>
                <?php the_content(); ?>
                <?php get_template_part( 'templates-parts/parts/link-to-price' ); ?>
            </div>
            <footer class="entry-footer">
                <div classs="entry-footer__col">
                    <span>Twoja ocena:</span>
                    <?php echo kk_star_ratings();?>
                </div>
                <div classs="entry-footer__col">
                    <span>Udostępnij:</span>
                    <?php echo do_shortcode('[addtoany]'); ?>
                </div>
            </footer>
        </div>
    </div>
</article>
<?php endwhile;
get_footer();
