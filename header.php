<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <mate charset="<?php bloginfo( 'charset' );?>">
            <!-- <title>One-Off KAO</title> -->
            <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <!-- CSS -->
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Philosopher">-->
        <!--<link rel="stylesheet" href="/css/style.css/style.css">-->
        <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">-->
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
                        <!--<nav class="c-Nav__body">
                            <ul id="menu-global-navi" class="c-Nav__body__menu">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a href="page-about.php">About</a>
                                </li>
                                <li>
                                    <a href="archive.html">Blog</a>
                                </li>
                                <li>
                                    <a href="shop.html">Shop</a>
                                </li>
                                <li>
                                    <a href="inquiry.html">Contact</a>
                                </li>
                            </ul>
                            <ul id="sp-menu-global-navi" class="c-Nav__body__spmenu">
                                <li>
                                    <a href="index.html"><i class="fa-solid fa-house"></i><br>
                                    <span class="iconname">Home</span></a>
                                </li>
                                <li>
                                    <a href="about.html"><i class="fa-solid fa-circle-info"></i><br>
                                    <span class="iconname">About</span></a>
                                </li>
                                <li>
                                    <a href="archive.html"><i class="fa-solid fa-pen-to-square"></i><br>
                                    <span class="iconname">Blog</span></a>
                                </li>
                                <li>
                                    <a href="shop.html"><i class="fa-solid fa-cart-shopping"></i><br>
                                    <span class="iconname">Shop</span></a>
                                </li>
                                <li>
                                    <a href="inquiry.html"><i class="fa-solid fa-envelope"></i><br>
                                    <span class="iconname">Contact</span></a>
                                </li>
                            </ul>
                        </nav>-->
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
