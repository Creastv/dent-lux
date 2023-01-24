<?php
$pos = get_field('position', 'options');
$name = get_field('name_and_surname', 'options');
$email = get_field('email', 'options');
$tel = get_field('phone', 'options');
$telLink = get_field('phone_link', 'options');
?>
<div class="footer__w__contact">
    <div class="footer__w__contact--wraper">
        <div class="g-title g-title--small">
            <span class="g-title__pref"><?php echo $pos; ?></span>
            <p class="g-title__title"><?php echo $name; ?></p>
        </div>
        <div class="g-buttons">
            <ul>
                <?php if(!empty($tel) && !empty($telLink)) { ?>
                <li>
                    <a href="mailto:<?php echo $telLink; ?>" class="btn btn--small">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34.996" height="31.006" viewBox="0 0 34.996 31.006">
                            <path id="Shape_24" data-name="Shape 24" d="M291.978,4839.756a18.959,18.959,0,0,1-7.912-13.562,18.178,18.178,0,0,1,5.162-14.272,6.659,6.659,0,0,1,8.569-.669,5.668,5.668,0,0,1,.728.639l.1.1a1.731,1.731,0,0,1,.187,2.164l-4.105,6.188a1.2,1.2,0,0,1-1.25.485c-.006,0-1.4-.318-2.09-.465a.706.706,0,0,1-.553-.842.731.731,0,0,1,.87-.536c.537.116,1.5.334,1.909.425l3.991-6.016a.358.358,0,0,0-.044-.459l-.077-.08a4.23,4.23,0,0,0-.55-.483,5.138,5.138,0,0,0-6.608.5,16.814,16.814,0,0,0-4.784,13.2,17.584,17.584,0,0,0,7.347,12.566,5.138,5.138,0,0,0,6.609-.5,4,4,0,0,0,.44-.551l.063-.1a.363.363,0,0,0-.058-.459l-5.128-5.326c-.38.148-1.306.51-1.819.7a.735.735,0,0,1-.944-.4.7.7,0,0,1,.414-.912c.652-.246,1.973-.766,1.974-.766a1.223,1.223,0,0,1,1.307.274l5.262,5.466a1.731,1.731,0,0,1,.233,2.159l-.078.121a5.588,5.588,0,0,1-.594.742,6.442,6.442,0,0,1-4.671,1.919A6.548,6.548,0,0,1,291.978,4839.756Zm19.892-1.813a.688.688,0,0,1,.09-.993,14.541,14.541,0,0,0,0-22.891.688.688,0,0,1-.09-.993.747.747,0,0,1,1.028-.087,15.919,15.919,0,0,1,0,25.049.744.744,0,0,1-1.028-.086Zm-2.525-3.849a.687.687,0,0,1,.033-1,10.149,10.149,0,0,0,0-15.187.688.688,0,0,1-.033-1,.745.745,0,0,1,1.03-.033,11.528,11.528,0,0,1,0,17.244.744.744,0,0,1-.5.191A.736.736,0,0,1,309.345,4834.094Zm-3.647-3.173a.688.688,0,0,1,.035-1,5.972,5.972,0,0,0,0-8.84.689.689,0,0,1-.035-1,.745.745,0,0,1,1.031-.034,7.352,7.352,0,0,1,0,10.9.747.747,0,0,1-1.031-.035Zm-15.189-.913a13.579,13.579,0,0,1-1.062-4.071,13.354,13.354,0,0,1,.409-4.843.731.731,0,0,1,.892-.5.7.7,0,0,1,.519.861,11.963,11.963,0,0,0-.368,4.347,12.234,12.234,0,0,0,.955,3.661.7.7,0,0,1-.39.922.748.748,0,0,1-.282.056A.73.73,0,0,1,290.509,4830.008Z" transform="translate(-283.994 -4810.001)" fill="#fff" />
                        </svg>
                        <span><?php echo $tel; ?> </span>
                    </a>
                </li>
                <?php } ?>
                <?php if(!empty($email)) { ?>
                <li>
                    <a href="mailto: <?php echo $email; ?>" class="btn btn--small">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35.998" height="29.999" viewBox="0 0 35.998 29.999">
                            <path id="Shape_23" data-name="Shape 23" d="M309.45,4928.756l-10.369-11.111-1.32-.44a.75.75,0,0,1,.475-1.423l1.5.5a.74.74,0,0,1,.312.2l9.6,10.285,7.479-25.839L293,4909.321a.75.75,0,0,1-.492-1.416l25.5-8.87a.75.75,0,0,1,.967.917l-8.25,28.5a.75.75,0,0,1-.547.52.7.7,0,0,1-.174.021A.75.75,0,0,1,309.45,4928.756Zm-14.824-3.544a.749.749,0,0,1-.376-.65v-8.528l-10.737-3.579a.749.749,0,0,1-.009-1.418l6-2.087a.75.75,0,1,1,.492,1.417l-3.919,1.363,9.121,3.041a.751.751,0,0,1,.524.522l0,.008,0,.008a.747.747,0,0,1,.023.208v7.74l4.122-2.409a.75.75,0,0,1,.757,1.294l-5.25,3.069a.745.745,0,0,1-.752,0Zm8.9-8.389a.751.751,0,0,1-.1-1.057l7.046-8.538-11.338,6.663a.75.75,0,0,1-.76-1.294l15-8.812a.75.75,0,0,1,.957,1.125l-9.749,11.812a.752.752,0,0,1-1.056.1Z" transform="translate(-283 -4898.994)" fill="#fff" />
                        </svg>

                        <span><?php echo $email; ?> </span>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="col-12 display-sm-none">
        <?php get_template_part('templates-parts/footer/footer', 'inf'); ?>
    </div>
</div>
