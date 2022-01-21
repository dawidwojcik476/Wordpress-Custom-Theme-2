<?php
/*
Template Name: Szablon Zapytania Ofertowe
Template Post Type: post, page, event
*/?>

<div class="single-page-container offers">
    <?php
get_header();?>



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
        <div class="main-content__wrapper">
            <?php  the_content(); ?>
        </div>
    </section>



    <div class="news-template__posts offers">
        <?php     $args = array(
           'post_type' => 'zapytanie',
            'posts_per_page' => -1,
            'suppress_filters' => false
          );

            $query = new WP_Query($args);

            while ($query->have_posts()) {
              $query->the_post();
  
              $termsArray = get_the_terms($post->ID, 'newscategory');
  
              $termsSLug = "";
              foreach ($termsArray as $term) {
                $termsSLug .= $term->slug . ' ';
              } ?>



        <a href="<?php echo get_permalink($post->ID) ?>">
            <div class="news-template__posts-item <?php echo  $termsSLug; ?>  grid-item">
                <div class="news-template__posts-content offers">
                    <h4 class="news-template__posts-header"><?php echo $post->post_title; ?></h4>
                    <p class="news-template__posts-date offers">
                        <img class="calendar"
                            src="<?php echo get_template_directory_uri(); ?>/public/images/calendar.png"
                            alt="Data wstawienia postu"> <?php echo get_the_date( 'F j Y', $post->ID ) ?> <img
                            class="bluarrow"
                            src="<?php echo get_template_directory_uri(); ?>/public/images/bluearrow.png"
                            alt="Przejdź do postu">
                    </p>
                    </p>


                </div>

                <div class="spacer"></div>
            </div>
        </a>
        <?php  }
                      wp_reset_postdata();

                     ?>
    </div>

    <?php get_footer(); ?>
</div>