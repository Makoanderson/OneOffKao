<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <mate charset="<?php bloginfo( 'charset' );?>">
            <!-- <title>One-Off KAO</title> -->
            <meta name="description" content="<?php bloginfo( 'description' ); ?>">
            <meta name="keywords" content="革,花,生花,アクセサリー,プレゼント"/>
    <!-- CSS -->
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
        <div class="l-wrapper">
            <header class="l-f-Header">
                <div class="l-f-Header__title">
                    <a href="<?php echo esc_url( home_url() ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/One-Off logo black[708].png" alt="<?php bloginfo( 'name' ); ?>">
                    </a>
                </div>
                <article class="c-Nav">
                    <div class="l-f-Header__link">
                        <nav class="c-Nav-f">
                        </nav>
                    </div>
                    <?php 
                    $headerNav = array (
                        'theme_location' => 'header-navigation',
                    );
                    wp_nav_menu( $headerNav );
                    $Spheader = array (
                        'theme_location' => 'spheader'
                    );
                    wp_nav_menu( $Spheader ); ?>
                    <section class="c-Nav__iconf">
                            <i class="fa-brands fa-facebook-square"></i>
                            <i class="fa-brands fa-instagram"></i>
                    </section>
                </article>
                </div>
            </header>
