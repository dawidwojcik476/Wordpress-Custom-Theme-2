<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" type="image/png" href="<?php the_field('favicon','option'); ?>" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed app-container">
        <header id="header" role="banner" class="header">

            <div class="header__logo">
                <a class="header__logo-link" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <?php if( get_field('header_logo', 'option') ): ?>
                    <img class="header__logo-image" src="<?php echo get_field('header_logo', 'option'); ?>"
                        alt="Logo" />
                    <?php endif; ?>

                </a>

            </div>

            <div class="header__firstmenu">
                <?php    wp_nav_menu([
                              'theme_location'    => 'primary-menu',
                              'menu_id'            => 'primary-menu',
                              'container_class'   => 'header__firstmenu-list',
                              'container_id'      => '',
                              'menu_class'        => 'header__firstmenu-ul',
                ]); ?>

            </div>


            <div class="header__search" id="search">

            <div class="header__search-icon">
            <i class="fas fa-search"></i>


            </div>
                <?php get_search_form(); ?>
            </div>

            <div class="header__accesibility">
                <div class="header__accesibility-font">
                    <button class="header__accesibility-fontup" onclick="document.querySelector('.pojo-a11y-btn-resize-plus').click()"> +A</button>
                    <button class="header__accesibility-fontnormal" onclick="document.querySelector('.pojo-a11y-btn-readable-font').click()">A</button>
                    <button class="header__accesibility-fontdown" onclick="document.querySelector('.pojo-a11y-btn-resize-minus').click()">A-</button>

                </div>
                <div class="header__accesibility-color">
                    <button onclick="document.querySelector('.pojo-a11y-btn-negative-contrast').click()" class="header__accesibility-colorcontrast"><i class="far fa-eye"></i>

</button>
                </div>
            </div>

            <?php if( have_rows('header_socials', 'option') ): ?>
            <div class="header__socials">
                <?php while( have_rows('header_socials', 'option') ): the_row(); ?>
                <a class="header__socials-link" href="<?php echo get_sub_field('header_socials_link') ?>"><img
                        class="header__socials-img" src="<?php echo get_sub_field('header_socials_logo') ?>" alt=""></a>
                <?php endwhile; ?>

            </div>
            <?php endif; ?>

            <div class="header__ham">
                <div class="header__ham-menubtn"></div>
            </div>

            <div class="header__secondmenu">
                <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/brick.png" alt="Gwiazdka">
                    <?php    wp_nav_menu([
                              'theme_location'    => 'second-header-menu',
                              'menu_id'            => 'second-header-menu',
                              'container_class'   => 'header__secondmenu-list',
                              'container_id'      => '',
                              'menu_class'        => 'header__secondmenu-ul',
                     ]); ?>

                </nav>

            </div>

        </header>