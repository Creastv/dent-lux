<?php 
$title = get_field('tytul');
$subtitle = get_field('podtytul_');
$subtitle2 = get_field('podtytul_two');
$desc = get_field('opis');

$galeria = get_field('galeria');
;
?>

<section id="about-us-ext">
    <div class="about-us-ext__wraper">
        <div class="about-us-ext__col"></div>
        <div class="about-us-ext__col">
            <?php if($title) { ?>
            <div class="title-page-wraper">
                <?php if($title) { ?>
                <h1 class="entry-title title-page">
                    <?php echo $title; ?>
                </h1>
                <svg xmlns="http://www.w3.org/2000/svg" width="162" height="2" viewBox="0 0 162 2">
                    <rect id="Rectangle_4" data-name="Rectangle 4" width="111" height="2" fill="#f6b846" />
                    <rect id="Rectangle_4_copy" data-name="Rectangle 4 copy" width="43" height="2" transform="translate(119)" fill="#f6b846" />
                </svg>
                <?php } ?>
                <?php if($subtitle) { ?>
                <p class="c-main"><?php echo $subtitle; ?></p>
                <?php } ?>
                <?php if($subtitle2) { ?>
                <p><?php echo $subtitle2; ?></p>
                <?php } ?>
                <?php if($desc) { ?>
                <?php echo $desc; ?>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
