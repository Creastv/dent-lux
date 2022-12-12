<?php 
$title       = get_field('title_opinions', 'options');
$subtitle    = get_field('dopisek', 'options');

$portale     = get_field('portale', 'options');
$opinie      = get_field('opinie', 'options');
?>
<section id="opinions">
    <div class="opinions-wraper">
        <div class="opinions-wraper__info">
            <?php if($title ){ ?>
            <h3><?php echo $title; ?></h3>
            <?php } ?>
            <?php if($subtitle){ ?>
            <p><?php echo $subtitle; ?></p>
            <?php } ?>
            <?php if($portale) { ?>
            <ul class="opinions-wraper__social">
                <?php foreach( $portale as $portal ) { ?>
                <li>
                    <span><?php echo $portal['portal']; ?></span>
                    <span><?php echo $portal['score']; ?></span>
                    <span><?php echo $portal['total']; ?></span>
                </li>
                <?php } ?>
            </ul>
            <?php } ?>
        </div>
        <div class="opinions-wraper__slider">
            <div class="swiper opinion">
                <div class="swiper-wrapper">
                    <?php foreach( $opinie as $opinia ) { ?>
                    <div class="swiper-slide">
                        <div class="opinions-wraper__item">
                            <div class="top">
                                <div class="stars">
                                    <img class="header-bg" src="<?php echo get_template_directory_uri() ?>/src/img/stars-<?php echo $opinia['ilosc_gwiazdek']; ?>.jpg" alt="opinie">
                                </div>
                                <div class="social">
                                    <?php echo $opinia['portal']; ?>
                                </div>
                            </div>
                            <div class="content">
                                <p><?php echo $opinia['opinia']; ?></p>
                                <p><b> <?php echo $opinia['imie_']; ?></b></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="arrows">
                    <div class="sw-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="16.03" viewBox="0 0 33 16.03">
                            <path id="Shape_15_copy" data-name="Shape 15 copy" d="M1444,3763.692a9.581,9.581,0,0,1,.74-.952q3.127-3.145,6.276-6.267a1.305,1.305,0,0,1,1.821-.182,1.288,1.288,0,0,1,.061,1.958c-1.083,1.091-2.177,2.171-3.265,3.258-.385.385-.766.775-1.2,1.217h.431q13.242,0,26.483-.011a1.547,1.547,0,0,1,1.653.979v.646a.31.31,0,0,0-.058.073,1.309,1.309,0,0,1-1.369.9q-13.339-.008-26.677,0h-.464c.117.124.19.205.267.282,1.4,1.4,2.807,2.789,4.2,4.193a1.3,1.3,0,1,1-1.861,1.8q-1.858-1.86-3.724-3.711c-.86-.858-1.729-1.708-2.574-2.58a10.563,10.563,0,0,1-.74-.952Z" transform="translate(-1444 -3756)" fill="#e1e1e1" />
                        </svg>
                    </div>
                    <div class="sw-pagination"></div>
                    <div class="sw-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="15.999" viewBox="0 0 33 15.999">
                            <path id="Shape_15" data-name="Shape 15" d="M1656,3764.323a9.563,9.563,0,0,1-.74.949q-3.127,3.139-6.276,6.254a1.307,1.307,0,0,1-1.821.182,1.284,1.284,0,0,1-.061-1.955c1.083-1.089,2.177-2.167,3.264-3.251.385-.385.766-.773,1.2-1.214h-.431q-13.241,0-26.483.011a1.547,1.547,0,0,1-1.653-.978v-.645a.3.3,0,0,0,.058-.072,1.309,1.309,0,0,1,1.369-.9q13.339.008,26.677,0h.464c-.117-.124-.19-.205-.267-.282-1.4-1.394-2.807-2.783-4.2-4.184a1.3,1.3,0,1,1,1.861-1.8q1.858,1.857,3.724,3.7c.86.856,1.729,1.7,2.574,2.575a10.625,10.625,0,0,1,.74.949Z" transform="translate(-1623 -3756.001)" fill="#e1e1e1" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
