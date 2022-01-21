<div class="single-page-container">

    <?php get_header();?>

    <div class="page-banner-container">


        <section class="page-banner">

            <div class="page-banner__leftside">
                <h2>Ekonomia Społeczna</h2>
            </div>


            <div class="page-banner__rightside">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/ekonomiasp.png"
                    alt="Ekonomia Spoleczna">
            </div>
        </section>
    </div>
    <?php
echo do_shortcode( '[aioseo_breadcrumbs]' );

?>

    <section class="page-header">
        <h1><?php echo get_the_title();?></h1>
    </section>

    <section class="main-content">
        <div class="main-content__info">
            <p>Data publikacji: <?php echo get_the_date( 'F j' ) ?></p>
            <?php if(get_field('single_post_author')):?>
            <p>Autor: <?php the_field('single_post_author')?> </p>
            <?php endif;?>
        </div>
        <div class="main-content__wrapper">
            <?php  the_content(); ?>
        </div>
    </section>

    <section id="gallery" class="gallery">
        <div class="gallery__header">
            <?php if (ICL_LANGUAGE_CODE=='en' ) : ?>
            <h2>Gallery</h2>
            <?php else:  ?>
            <h2>Galeria</h2>
            <?php endif; ?>

        </div>

        <?php 
        $images = get_field('inv_gallery');
          if( $images ): ?>
        <ul>
            <?php foreach( $images as $image ): ?>
            <li class="gallery__item">
                <a href="<?php echo esc_url($image['url']); ?>" data-lightbox="roadtrip">
                    <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>
                <p><?php echo esc_html($image['caption']); ?></p>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </section>
    <?php get_footer(); ?>
</div>