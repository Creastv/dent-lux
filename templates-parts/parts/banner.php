<?php 
$title    = get_field('title', 'options');
$subtitle = get_field('subtitle', 'options');
$link      = get_field('link', 'options');
if( $link ){ 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}
?>
<section id="banner-hor">
    <div class="banner-hor__wraper">
        <div class="banner-hor__wraper__content">
            <?php if($title){ ?>
            <p class="h4"><?php echo $title; ?></p>
            <?php } ?>
            <?php if($subtitle){ ?>
            <p><?php echo $subtitle; ?></p>
            <?php } ?>
        </div>
        <div class="banner-hor__wraper__url">
            <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn">
                <?php echo esc_html( $link_title ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="15.999" viewBox="0 0 33 15.999">
                    <path id="Shape_15" data-name="Shape 15" d="M1490,1307.323a9.537,9.537,0,0,1-.74.949q-3.126,3.139-6.276,6.255a1.306,1.306,0,0,1-1.821.182,1.283,1.283,0,0,1-.061-1.955c1.083-1.089,2.177-2.167,3.264-3.252.385-.384.766-.773,1.2-1.214h-.431q-13.242,0-26.483.011a1.548,1.548,0,0,1-1.653-.977v-.645a.291.291,0,0,0,.058-.072,1.309,1.309,0,0,1,1.369-.9q13.339.008,26.677,0h.464c-.117-.124-.19-.205-.267-.282-1.4-1.394-2.807-2.783-4.2-4.185a1.295,1.295,0,1,1,1.861-1.8q1.858,1.857,3.724,3.7c.861.856,1.729,1.7,2.574,2.575a10.659,10.659,0,0,1,.74.949Z" transform="translate(-1457 -1299.001)" fill="#fff" />
                </svg>
            </a>
        </div>
        <div class="banner-hor__wraper__img">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/panie.png" alt="Zespół Dent Lux">
        </div>
    </div>
</section>
