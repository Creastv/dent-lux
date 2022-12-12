<?php 
$uslugi    = get_field('uslugi');
$title     = get_field('title');
$desc    = get_field('opis');
?>
<section id="offers">
<?php if($desc && $title) { ?>
<div class="title-page-wraper">
        <?php if($title) { ?>
        <h2 class="entry-title title-page">
           <?php echo $title; ?>
        </h2>
        <svg xmlns="http://www.w3.org/2000/svg" width="162" height="2" viewBox="0 0 162 2">
            <rect id="Rectangle_4" data-name="Rectangle 4" width="111" height="2" fill="#f6b846"/>
            <rect id="Rectangle_4_copy" data-name="Rectangle 4 copy" width="43" height="2" transform="translate(119)" fill="#f6b846"/>
        </svg>
        <?php } ?>
        <?php if($desc) { ?>
        <p><?php echo $desc; ?></p>
        <?php } ?>
        </div>
<?php } ?>
<?php if( $uslugi ): ?>
    <div class="offers__wraper">
    <?php foreach( $uslugi as $post ): setup_postdata($post); ?>
        <div class="offers__wraper__item">
            <div class="offers__item">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_excerpt();?></p>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
</section>