<?php
    $menus       = get_field('menus', 'options');
?>
<div class="footer__w__menus">
    <div class="footer__w__menus__wraper">
        <?php if( $menus ) { ?>
            <?php foreach( $menus as $menu ) { ?>
                <div class="footer__w__menus--item">
                    <?php if($menu['tytul']) { ?>
                    <p class="h4"><?php echo $menu['tytul']; ?></p>
                    <?php } else { ?>
                    <span class="h4"></span>
                    <?php } ?>
                    <?php echo $menu['menu']; ?>
                </div>
            <?php } ?>
        <?php } ?>
    </div>  
</div>

