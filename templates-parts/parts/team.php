<?php
$team = get_field('zesol');
?>

<section id="team">
    <div class="team__wraper">
        <?php foreach($team as $te) { ?>
        <div class="team__person">
            <div class="team__person_img">
                <?php if($te['zdecie']) {  ?>
                <?php echo wp_get_attachment_image( $te['zdecie'], 'full' ); ?>
                <?php } ?>
            </div>
            <div class="team__person_content">
                <?php if($te['imie_i_nazwisko']) {  ?>
                <p class="h2"><?php echo $te['imie_i_nazwisko']; ?></p>
                <?php } ?>

                <?php if($te['pozycja']) {  ?>
                <div class="poz"> <?php echo $te['pozycja']; ?></div>
                <?php } ?>

                <?php if($te['opis']) {  ?>
                <?php echo $te['opis']; ?>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
