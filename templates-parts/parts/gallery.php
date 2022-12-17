<?php $galleries = get_field( 'galeria' ); ?>

<?php if ( ! empty( $galleries ) ): ?>
<div id="gallery">
    <div class="gallery__wraper">
        <?php foreach ( $galleries as $gallery ): ?>
        <div class="gallery__item">
            <a data-fancybox="gallery" href="<?php echo wp_get_attachment_image_url( $gallery, 'full' ); ?>">
                <?php echo wp_get_attachment_image( $gallery, 'gallery' ); ?>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>
