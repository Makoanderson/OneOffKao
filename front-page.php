<?php get_header();?>   
            <main class="l-Main p-front c-title">
                <section class="p-front-info">
                    <div class="c-title-info">
                        <!--<img class="c-title-info__img1" src="../img/GerberaPNG/g02.png">
                        <img class="c-title-info__img2" src="../img/GerberaPNG/g03.png"> -->
                        <h2><span>新着情報</span></h2>
                    </div>
                <article class="autoplay">
                    <?php if(have_posts()):while(have_posts()):the_post();?>
                    <div class="p-front-info1">
                        <div class="image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="desc">
                            <h3>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                        </div>
                        <!--<div class="p-front-info1__title">
                            <img src="/img/sakura-series.jpg">
                            <p class="info-title"><a href="#">テキストテキストテキスト</a></p>
                        </div>-->
                        <!--<div class="p-front-info1__title">
                            <img src="/img/sakura-series.jpg">
                            <p class="info-title"><a href="#">テキストテキストテキスト</a></p>
                        </div>
                        <div class="p-front-info1__title">
                            <img src="/img/sakura-series.jpg" class="info-img1">
                            <p class="info-title info-title-sp"><a href="#">テキストテキストテキスト</a></p>
                        </div>-->
                    </div>
                        <?php endwhile; else:?>
                            <p>記事はありません。</p>
                        <?php endif;?>
                </article>
                </section>
                <section class="p-front-about">
                    <div class="c-title-about">
                        <!--<img class="c-title-about__img1" src="../img/GerberaPNG/g02.png">
                        <img class="c-title-about__img2" src="../img/GerberaPNG/g03.png">-->
                        <h2><span>About</span></h2>
                    </div>
                    <div class="p-front-about-info">
                        <p>One-Off KAO(ワンオフ・カオ)は、<br>革のお花のアクセサリーショップです。<br>全てハンドメイドで、<br>大きな一枚革からはさみで<br>ひとつずつ切り染めてお花に仕立てています。<br>【美しい色合いと立体感】のある形が特徴です。</p>
                        <img class="p-front-about__img" src="<?php echo esc_url( get_template_directory_uri() );?>/img/blog2.jpg">
                    </div>    
                </section>
                <section class="p-front-blog">
                    <div class="c-title-blog">
                        <!--<img class="c-title-blog__img1" src="../img/GerberaPNG/g02.png">
                        <img class="c-title-blog__img2" src="../img/GerberaPNG/g03.png">-->
                        <h2><span>Blog</span></h2>
                    </div>
                    <div class="container">
                    <?php if(have_posts()):while(have_posts()):the_post();?>
                    <article class="p-front-blog1">
                        <div class="p-front-blog1__title">
                            <?php the_post_thumbnail(); ?>
                            <!--<img src="/img/blog1.jpg">
                            <p class="blog-title"><a href="#">テキストテキストテキスト</a></p>-->
                        </div>
                        <div class="desc">
                            <h3>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                        </div>
                        <!--<div class="p-front-blog1__title">
                            <img src="/img/blog1.jpg">
                            <p class="blog-title"><a href="#">テキストテキストテキスト</a></p>
                        </div>
                        <div class="p-front-blog1__title">
                            <img src="/img/blog1.jpg" class="blog-img1">
                            <p class="blog-title blog-title-sp"><a href="#">テキストテキストテキスト</a></p>
                        </div>-->
                    </article>
                    <?php endwhile; else:?>
                        <p>記事はありません。</p>
                    <?php endif;?>
                    </div>
                </section>
            </main>
        <?php get_footer();?>    