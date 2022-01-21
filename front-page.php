<?php
get_header();?>

<div class="frontpage-wrapper">


    <section class="main-banner">

        <div class="main-banner__top">
            <div class="main-banner__top-image">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/ekonomiasp.png"
                    alt="Ekonomia Spoleczna">

            </div>
            <div class="main-banner__top-text">
                <h1>Niezwykłe możliwości <p>tak blisko Ciebie</p>
                </h1>

            </div>

        </div>
        <?php if( have_rows('main_banner_blocks') ): ?>
        <?php while( have_rows('main_banner_blocks') ): the_row(); ?>
        <div class="main-banner__bottom">
            <a href="<?php echo get_sub_field('main_banner_blocks_left_url'); ?>">
                <div class="main-banner__bottom-leftbox">
                    <div class="main-banner__bottom-text">
                        <h3><?php echo get_sub_field('main_banner_blocks_left_content'); ?></h3>
                    </div>
                    <button class="main-banner__bottom-button--blue">
                        <?php echo get_sub_field('main_banner_blocks_left_button'); ?> <p>>></p>
                    </button>
                </div>
            </a>


            <a href="<?php echo get_sub_field('main_banner_blocks_right_url'); ?>">
                <div class="main-banner__bottom-rightbox">
                    <div class="main-banner__bottom-text">
                        <h3> <?php echo get_sub_field('main_banner_blocks_right_content'); ?></h3>
                    </div>
                    <button class="main-banner__bottom-button--green">
                        <?php echo get_sub_field('main_banner_blocks_right_button'); ?> <p>>></p>
                    </button>
                </div>
            </a>

        </div>
        <?php endwhile; ?>
        <?php endif; ?>

    </section>

    <section class="contentblocks">

        <?php if( have_rows('articles_blocks') ): ?>
        <?php while( have_rows('articles_blocks') ): the_row(); ?>
        <a href="<?php echo get_sub_field('articles_blocks_url') ?>" class="contentblock">
            <div class="contentblock__leftside">
                <img src="<?php echo get_sub_field('articles_blocks_image') ?>" alt="Główne zdjęcie artykułu">
            </div>
            <div class="contentblock__rightside">
                <div class="contentblock__rightside-icon">
                    <img src="<?php echo get_sub_field('articles_blocks_icon') ?>" alt="Ikona artykułu">
                </div>
                <div class="contentblock__rightside-content">
                    <p><?php echo get_sub_field('articles_blocks_text') ?></p>
                </div>
            </div>
        </a>
        <?php endwhile; ?>
        <?php endif; ?>

    </section>

    <section class="frontmap">
        <?php if( have_rows('left_map_content') ): ?>
        <?php while( have_rows('left_map_content') ): the_row(); ?>
        <div class="frontmap__leftside">
            <div class="frontmap__leftside-top">
                <div class="frontmap__leftside-icon">
                    <img src="<?php echo get_sub_field('left_map_content_icon') ?>" alt="Ikona mapy">
                </div>
                <div class="frontmap__leftside-content">
                    <p><?php echo get_sub_field('left_map_content_title') ?></p>
                </div>
            </div>

            <a href="<?php echo get_sub_field('left_map_content_url') ?>" class="frontmap__leftside-box">
                <div class="frontmap__leftside-box-text">
                    <p><?php echo get_sub_field('left_map_content_box') ?></p>
                </div>
                <button class="frontmap__leftside-box-button--green">

                    <?php echo get_sub_field('left_map_content_button') ?> <p>>></p>
                </button>
            </a>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

        <div class="frontmap__rightside">

            <?php if( have_rows('locations') ): ?>
            <div class="acf-map" data-zoom="20">
                <?php while ( have_rows('locations') ) : the_row(); 

            // Load sub field values.
            $location = get_sub_field('location');
            $title = get_sub_field('description');
            $description = get_sub_field('description');
            ?>
                <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>"
                    data-lng="<?php echo esc_attr($location['lng']); ?>">
                    <h3><?php echo esc_html( $title ); ?></h3>
                    <p><em><?php echo esc_html( $location['address'] ); ?></em></p>
                    <p><?php echo esc_html( $description ); ?></p>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <div class="knowbase-container">
        <section class="knowbase">
            <?php if( have_rows('baseknow_header') ): ?>
            <?php while( have_rows('baseknow_header') ): the_row(); ?>
            <div class="knowbase__header">
                <h2><?php echo get_sub_field('baseknow_header_title') ?></h2>
                <img src="<?php echo get_sub_field('baseknow_header_icon') ?>" alt="Ikona żarówka (wiedza)">
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="knowbase__content">
            <?php if( have_rows('baseknow_blocks') ): ?>
            <?php while( have_rows('baseknow_blocks') ): the_row(); ?>
                <a href="<?php echo get_sub_field('baseknow_blocks_url') ?>" class="knowbase__item">
                    <div class="knowbase__item-icon">
                        <img src="<?php echo get_sub_field('baseknow_blocks_icon') ?>" alt="Żarówka - ikona bazy wiedzy">
                    </div>
                    <div class="knowbase__item-text">
                        <p><?php echo get_sub_field('baseknow_blocks_title') ?></p>
                    </div>
                </a>
             <?php endwhile; ?>
             <?php endif; ?>


            </div>
        </section>
    </div>
    <?php if( have_rows('contact_frontpage') ): ?>
  <?php while( have_rows('contact_frontpage') ): the_row(); ?>
  <?php if( get_sub_field('kontakt_ikona_1')): ?>
    <section class="questions">
        
        <div class="question">
            <div class="question__image sd">
                <img src="<?php echo get_sub_field('kontakt_ikona_1') ?>" alt="Ikona kontakt">
            </div>
            <p class="question__text small"><?php echo get_sub_field('kontakt_tekst_1') ?></p>
            <a class="question__button" href="<?php echo get_sub_field('kontakt_url_1') ?>"><?php echo get_sub_field('kontakt_tresc_przycisku_1') ?><p>>> </p></a>

        </div>

        <div class="question">
            <div class="question__image ds">
                <img src="<?php echo get_sub_field('kontakt_ikona_2') ?>" alt="Ikona co słychać">
            </div>
            <p class="question__text"><?php echo get_sub_field('kontakt_tekst_2') ?></p>
            <a class="question__button green" href="<?php echo get_sub_field('kontakt_url_2') ?>"><?php echo get_sub_field('kontakt_tresc_przycisku_2') ?> <p>>> </p></a>

        </div>
    </section>
    <?php endif; ?>
    <?php endwhile; ?>
      <?php endif; ?>


</div>

<?php
get_footer();
?>