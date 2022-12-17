<?php 
$title = get_field('title');
$link = get_field('link');
?>

<?php if($title && $link) { ?>
<section id="go-to-price">
    <div class="gtp__wraper">
        <div class="left">
            <p class="h3"><?php echo $title;?></p>
        </div>
        <div class="right">
            <?php if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php } ?>
