<footer class="l-Foot c-Footer">
                <section class="l-Foot__logo">
                    <div class="c-Footer__logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/One-Off logo black[708].png">
                    </div>
                </section>
                <section class="l-Foot__icon">
                    <div class="c-Footer__icon">
                        <i class="fa-brands fa-facebook-square"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    </section>
                <nav class="l-Foot__nav c-Footer__nav">
                </nav>
                <?php
                $footerNav = array (
                    'theme_location' => 'footer-navigation',
                );
                wp_nav_menu( $footerNav ); ?>
                <p><small class="copyright">Copyright © 2022  <?php bloginfo( 'name' );?> All Rights Reserved. </small></p>
            </footer>
        </div>
        <?php wp_footer(); ?>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri());?>/slick-1.8.1/slick/slick.min.js"></script>
        <script src="<?php echo esc_url(get_template_directory_uri());?>/OneOffKao.js"></script>
        <script>
            $('.autoplay').slick({
                autoplay:true,
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplaySpeed: 2000,
                pauseOnHover: false,
                pauseOnFocus: false,
                pauseOnDotsHover: false,
                centerMode: true,
                centerPadding: "15%",
                adaptiveHeight: true,
                dots: false,
                arrows: true,
                variableWidth: false,
                responsive: [{
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                }
                ]
            });
        </script>
    </body>
</html>