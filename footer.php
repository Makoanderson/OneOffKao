<footer class="l-Foot c-Footer">
                <div class="l-Foot__logo">
                    <div class="c-Footer__logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/One-Off logo black[708].png">
                    </div>
                </div>
                <div class="l-Foot__icon">
                    <div class="c-Footer__icon">
                        <i class="fa-brands fa-facebook-square"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </div>
                <div class="l-Foot__nav c-Footer__nav">
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
                </div>
                <?php
                $footerNav = array (
                    'theme_location' => 'footer-navigation',
                );
                wp_nav_menu( $footerNav ); ?>
            </footer>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>