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
                    <!--<ul class="c-Footer__nav__menu">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="about.html">About</a>
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
                    </ul>-->
                </nav>
                <?php
                $footerNav = array (
                    'theme_location' => 'footer-navigation',
                );
                wp_nav_menu( $footerNav ); ?>
            </footer>
        </div>
        <?php wp_footer(); ?>
        <!--<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>-->
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri());?>/slick-1.8.1/slick/slick.min.js"></script>
        <script src="<?php echo esc_url(get_template_directory_uri());?>/OneOffKao.js"></script>
        <!--<script>   
        $(document).ready(function(){
                $('.autoplay').slick({
                    setting-name: setting-value
                });
            });
        </script>-->
        <script>
            $('.autoplay').slick({
                autoplay:true,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplaySpeed: 2000,
                pauseOnHover: false,
                pauseOnFocus: false,
                pauseOnDotsHover: false,
                centerMode: true,
                /*centerPadding: '10%',*/
                centerPadding: "15%",
                adaptiveHeight: true,
                /*dots: true,*/
                arrows: true,
                /*variableWidth: true,*/
                /*responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                    }
                }
                {
                    breakpoint: 600,
                    settings:{
                        slidesToShow:2,
                        slidesToScroll:2,
                        infinite: true,
                    }
                }
                {
                    breakpoint: 480,
                    settings:{
                        slidesToShow: 1,
                        slidesToScroll:1,
                        infinite: true,
                    }
                }]*/
            });
        </script>
    </body>
</html>