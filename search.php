<div class="single-page-container single-page">

<?php get_header();?>

<div class="page-banner-container ">


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
<h1>  <?php printf( esc_html__( 'Wyniki wyszukiwania: %s', 'blankslate' ), get_search_query() ); ?></h1>
</section>

<section class="main-content" style="margin-bottom:40vh;min-height: 0px;" >
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'entry' ); ?>
    <?php endwhile; ?>
    <?php get_template_part( 'nav', 'below' ); ?>
    <?php else : ?>
    <article id="post-0" class="post no-results not-found">
        <header class="header">
            <h1 class="entry-title" itemprop="name"><?php esc_html_e( 'Nie znaleziono przypasowanych podstron', 'blankslate' ); ?></h1>
        </header>
        <div class="entry-content" itemprop="mainContentOfPage">
            <p><?php esc_html_e( 'Przepraszamy, nie znaleziono przypisanych podstron. Spróbuj ponownie.', 'blankslate' ); ?></p>
        </div>
    </article>
  
</section>
<?php endif; ?>
<?php get_footer(); ?>
</div>