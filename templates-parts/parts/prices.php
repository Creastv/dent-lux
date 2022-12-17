<?php 
$prices = get_field('cennik');
?>

<section id="prices">
    <?php foreach($prices as $price) { ?>
    <div id="<?php echo $price['odnosnik']; ?>" class="price__item">
        <div class="price__item__top">
            <?php if($price['tytul']) {  ?>
            <p class="h2"><?php echo $price['tytul']; ?></p>
            <?php } ?>

            <?php if($price['opis']) {  ?>
            <?php echo $price['opis']; ?>
            <?php } ?>
        </div>
        <div class="price__item__wraper">
            <div class="prices__services">
                <?php foreach($price['uslugi'] as $usluga) { ?>
                <div class="usl">
                    <?php if($usluga['nazwa_uslugi']) {  ?>
                    <p><b><?php echo $usluga['nazwa_uslugi']; ?></b></p>
                    <?php } ?>
                    <?php if($usluga['cena']) {  ?>
                    <span><b><?php echo $usluga['cena']; ?></b></span>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
            <div class="prices__desc">
                <?php if($price['opis_dwa']) {  ?>
                <?php echo $price['opis_dwa']; ?>
                <?php } ?>
            </div>
        </div>

    </div>
    <?php } ?>
</section>
