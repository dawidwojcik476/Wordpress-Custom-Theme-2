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
    <div class="main-content__wrapper">
    <?php  the_content(); ?>
    </div>
</section>


<?php get_footer(); ?>
</div>