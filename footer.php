<?php
$map      = get_field('mapa'); 
$info     = get_field('pelne_info');
$opinion  = get_field('opinie'); 
$banner = get_field('banner');
?>

<?php if($banner) { ?>
<?php get_template_part('templates-parts/parts/banner'); ?>
<?php } ?>

<?php if($opinion) { ?>
<?php get_template_part('templates-parts/parts/opinions'); ?>
<?php } ?>

<?php if($info) { ?>
<?php get_template_part('templates-parts/parts/full-info'); ?>
<?php } ?>
</div>
</div>
</main>
 <footer id="footer" itemscope itemtype="http://schema.org/WPFooter">
    <?php if($map) { ?>
    <?php get_template_part('templates-parts/parts/map'); ?>
    <?php } else { ?>
        <br><br><br>
   <?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer__wraper">
                    <?php get_template_part('templates-parts/footer/footer', 'contact'); ?>
                    <?php get_template_part('templates-parts/footer/footer', 'menu'); ?>
                </div>
            </div>
            <div class="col-12 display-sm-block">
                <?php get_template_part('templates-parts/footer/footer', 'inf'); ?>
            </div>
        </div>
    </div>
</footer>
<?php get_template_part('templates-parts/footer/footer', 'social-media'); ?>
<span id="go-to-top" ></span>
<?php wp_footer(); ?>
</body>
</html>