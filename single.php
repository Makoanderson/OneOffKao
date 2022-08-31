<?php get_header('other');?>   
            <!--<main class="l-Main p-front c-title">
                <section class="p-front-info">
                
                <article>
                    <div class="c-title-info">
                        <img class="c-title-info__img1" src="../img/GerberaPNG/g02.png">
                        <img class="c-title-info__img2" src="../img/GerberaPNG/g03.png">
                        <h2><span>新着情報</span></h2>
                    </div>
                    <div class="p-front-info1">
                        <div class="p-front-info1__title">
                            <img src="../img/sakura-series.jpg">
                            <p class="info-title"><a href="#">テキストテキストテキスト</a></p>
                        </div>
                        <div class="p-front-info1__title">
                            <img src="/img/sakura-series.jpg">
                            <p class="info-title"><a href="#">テキストテキストテキスト</a></p>
                        </div>
                        <div class="p-front-info1__title">
                            <img src="/img/sakura-series.jpg" class="info-img1">
                            <p class="info-title info-title-sp"><a href="#">テキストテキストテキスト</a></p>
                        </div>
                    </div>
                    </article>
                        <p>記事はありません。</p>
                </section>
                <section class="p-front-about">
                    <div class="c-title-about">
                        <img class="c-title-about__img1" src="../img/GerberaPNG/g02.png">
                        <img class="c-title-about__img2" src="../img/GerberaPNG/g03.png">
                        <h2><span>About</span></h2>
                    </div>
                    <div class="p-front-about-info">
                        <p>One-Off KAO(ワンオフ・カオ)は、<br>革のお花のアクセサリーショップです。<br>全てハンドメイドで、<br>大きな一枚革からはさみで<br>ひとつずつ切り染めてお花に仕立てています。<br>【美しい色合いと立体感】のある形が特徴です。</p>
                        <img class="p-front-about__img" src="../img/blog2.jpg">
                    </div>    
                </section>
                <section class="p-front-blog">
                    <div class="c-title-blog">
                        <img class="c-title-blog__img1" src="../img/GerberaPNG/g02.png">
                        <img class="c-title-blog__img2" src="../img/GerberaPNG/g03.png">
                        <h2><span>Blog</span></h2>
                    </div>
                    <div class="p-front-blog1">
                        <div class="p-front-blog1__title">
                            <img src="../img/blog1.jpg">
                            <p class="blog-title"><a href="#">テキストテキストテキスト</a></p>
                        </div>
                        <div class="p-front-blog1__title">
                            <img src="../img/blog1.jpg">
                            <p class="blog-title"><a href="#">テキストテキストテキスト</a></p>
                        </div>
                        <div class="p-front-blog1__title">
                            <img src="../img/blog1.jpg" class="blog-img1">
                            <p class="blog-title blog-title-sp"><a href="#">テキストテキストテキスト</a></p>
                        </div>
                    </div>
                </section>
            </main>-->
            <!--<div class="l-Header__title">
                    <img src="../img/One-Off logo black[708].png">
                </div>
                <div class="l-Header__link">
                    <div class="c-Nav">
                        <nav class="c-Nav__body">
                            <ul id="menu-global-navi" class="c-Nav__body__menu">
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
                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i><br>
                                    <span class="iconname">Shop</span></a>
                                </li>
                                <li>
                                    <a href="inquiry.html"><i class="fa-solid fa-envelope"></i><br>
                                    <span class="iconname">Contact</span></a>
                                </li>
                            </ul>
                        </nav>
                        <div class="c-Nav__icon">
                            <i class="fa-brands fa-facebook-square"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </div>
                </div>
            </header>-->
            <main class="l-Main">
                <div class="l-Main-wrapper">
                <article class="p-blog">
                    <?php while (have_posts()):the_post();?>
                    <header class="p-blog-info c-title">
                        <div class="c-title-blogtitle">
                            <!--<img class="c-title-blogtitle__img1" src="../img/GerberaPNG/g02.png">
                            <img class="c-title-blogtitle__img2" src="../img/GerberaPNG/g03.png">-->
                            <h2><span><?php the_title();?><!--お店のお知らせです。--></span></h2>
                        </div>
                        <p class="p-blog-date"><time>公開日:<?php the_time('Y/m/d');?></time>
                                                <time>最終更新日:<?php the_modified_date('Y/m/d') ?></time><!--4/7<span>2022</span>--></p>
                        <p class="p-blog-cat">カテゴリー:<?php the_category("/");?><!--お店の紹介--></p>
                    </header>
                    <div class="p-blog-mv">
                        <?php the_post_thumbnail(); ?>
                        <?php the_content();?>
                        <!--<img src="/img/sakura-series.jpg" alt="新作商品">
                        <p>テキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキスト
                        </p>-->
                    </div>
                    <?php endwhile;?>
                </article>
                <?php get_sidebar();?>  
                </div>
            </main>
        <?php get_footer();?>    