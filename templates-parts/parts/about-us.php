<?php 
$title = get_field('tytul');
$desc = get_field('dopisek');

$bLeft = get_field('bullety_lewa');
$bRight = get_field('bullety_prawa');

$img = get_field('zdjecie');
$video = get_field('video');
?>

<section id="about-us">
    <?php if($desc && $title) { ?>
    <div class="title-page-wraper">
        <?php if($title) { ?>
        <h2 class="entry-title title-page">
            <?php echo $title; ?>
        </h2>
        <svg xmlns="http://www.w3.org/2000/svg" width="162" height="2" viewBox="0 0 162 2">
            <rect id="Rectangle_4" data-name="Rectangle 4" width="111" height="2" fill="#f6b846" />
            <rect id="Rectangle_4_copy" data-name="Rectangle 4 copy" width="43" height="2" transform="translate(119)" fill="#f6b846" />
        </svg>
        <?php } ?>
        <?php if($desc) { ?>
        <p><?php echo $desc; ?></p>
        <?php } ?>
    </div>
    <?php } ?>
    <div class="about-us__wraper">
        <div class="about-us__col">
            <div class="about-us__bulets about-us__bulets--left">
                <?php foreach( $bLeft as $bl ) { ?>
                <div class="about-us__bulet">
                    <div class="icona">
                        <?php echo $bl['icona']; ?>
                    </div>
                    <p class="h4"><?php echo $bl['tytul']; ?></p>
                    <p><?php echo $bl['opis']; ?></p>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="about-us__col">
            <div class="img" style="background-image:url('<?php echo $img; ?>')">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="274.291" height="271.072" viewBox="0 0 274.291 271.072">
                    <defs>
                        <filter id="Shape_25" x="0" y="0" width="274.291" height="271.072" filterUnits="userSpaceOnUse">
                            <feOffset dx="2.572" dy="1.545" input="SourceAlpha" />
                            <feGaussianBlur stdDeviation="14.5" result="blur" />
                            <feFlood flood-opacity="0.58" />
                            <feComposite operator="in" in2="blur" />
                            <feComposite in="SourceGraphic" />
                        </filter>
                    </defs>
                    <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Shape_25)">
                        <path id="Shape_25-2" data-name="Shape 25" d="M956.266,2970.1a8.268,8.268,0,0,0-1.394-.331,88.335,88.335,0,0,1-26.035-5.8c-42.435-16.323-66.7-58.955-58.394-102.961A88.189,88.189,0,0,1,899,2810.466c21.736-19.416,47.422-27.279,76.482-23.523,22.027,2.847,40.66,12.666,55.779,28.693a88.96,88.96,0,0,1,23.409,46.42c.58,3.282.967,6.6,1.443,9.9v12.584c-.278,2.117-.522,4.239-.84,6.35a89.987,89.987,0,0,1-21.8,47.174q-22.653,25.633-56.859,30.983c-2.63.408-5.278.708-7.916,1.057Zm-71.708-92.032c-.008,42.284,34.933,76.609,77.966,76.594,42.943-.015,77.854-34.306,77.881-76.5.027-42.3-34.877-76.681-77.872-76.7H962.5C919.505,2801.468,884.567,2835.806,884.558,2878.071Zm62.532,27.938c-.14-4.19-.056-8.387-.059-12.58q-.008-7.638,0-15.277,0-13.213.012-26.421a9.488,9.488,0,0,1,.28-2.838c1-3.1,4.618-4.025,7.619-1.91,5.94,4.184,11.833,8.433,17.745,12.657q9.9,7.074,19.8,14.151c3.866,2.764,3.865,6.029-.027,8.809q-18.4,13.151-36.807,26.282a16.223,16.223,0,0,1-1.364.9,5.481,5.481,0,0,1-2.728.764A4.442,4.442,0,0,1,947.09,2906.009Z" transform="translate(-827.9 -2744.08)" fill="#f39200" />
                    </g>
                </svg>

            </div>
        </div>
        <div class="about-us__col">
            <div class="about-us__bulets about-us__bulets--right ">
                <?php foreach( $bRight as $bl ) { ?>
                <div class="about-us__bulet">
                    <div class="icona">
                        <?php echo $bl['icona']; ?>
                    </div>
                    <p class="h4"><?php echo $bl['tytul']; ?></p>
                    <p><?php echo $bl['opis']; ?></p>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
