<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <mate charset="<?php bloginfo( 'charset' );?>">
            <!-- <title>One-Off KAO</title> -->
            <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <!-- CSS -->
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
        <div class="l-wrapper">
            <header class="l-Header">
                <div class="l-Header__title">
                    <a href="<?php echo esc_url( home_url() ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/One-Off logo black[708].png" alt="<?php bloginfo( 'name' ); ?>">
                    </a>
                </div>
                <article class="c-nav">
                    <div class="l-Header__link">
                    <nav class="c-nav-f">
                        </div>
                    <?php 
                    $headerN = array (
                        'theme_location' => 'header-navi',
                    );
                    wp_nav_menu( $headerN );
                    $Spheader = array (
                        'theme_location' => 'spheader'
                    );
                    wp_nav_menu( $Spheader ); ?>
                    <div class="c-Nav__icon">
                            <i class="fa-brands fa-facebook-square"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                </article>
                </div>
            </header>