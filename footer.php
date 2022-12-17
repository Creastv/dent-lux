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
<?php get_template_part('templates-parts/parts/social-media'); ?>
<span id="go-to-top">
    <svg xmlns="http://www.w3.org/2000/svg" width="30.698" height="31.503" viewBox="0 0 30.698 31.503">
        <path id="Icon_awesome-arrow-up" data-name="Icon awesome-arrow-up" d="M2.454,20.355.893,18.795a1.681,1.681,0,0,1,0-2.384L14.555,2.742a1.681,1.681,0,0,1,2.384,0L30.6,16.4a1.681,1.681,0,0,1,0,2.384l-1.561,1.561a1.689,1.689,0,0,1-2.412-.028l-8.065-8.466V32.063a1.683,1.683,0,0,1-1.687,1.688h-2.25a1.683,1.683,0,0,1-1.687-1.687V11.855L4.866,20.327a1.677,1.677,0,0,1-2.412.028Z" transform="translate(-0.397 -2.247)" />
    </svg>
</span>
<?php wp_footer(); ?>
</body>

</html>
