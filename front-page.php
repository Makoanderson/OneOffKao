<?php get_header();?>   
            <main class="l-Main p-front c-title">
                <section class="p-front-info">
                    <div class="c-title-info">
                        <h2><span>新着情報</span></h2>
                    </div>
                <article class="autoplay">
                    <?php $args=['category_name'=>'product'];
                            $custom_posts=get_posts($args);
                            foreach($custom_posts as $post): setup_postdata($post);?>
                    <div class="p-front-info1" id="js-slider">
                        <div class="image">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                        <div class="desc">
                            <h3>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                        </div>
                    </div>
                    <?php endforeach;?>
                </article>
                </section>
                <section class="p-front-about">
                    <div class="c-title-about">
                        <h2><span>About</span></h2>
                    </div>
                    <div class="p-front-about-info">
                        <p>One-Off KAO(ワンオフ・カオ)は、<br>革のお花のアクセサリーのお店です。<br>全てハンドメイドで、<br>大きな一枚革からはさみで<br>ひとつずつ切り染めてお花に仕立てています。<br>【美しい色合いと立体感】のある形が特徴です。</p>
                        <a href="<?php echo esc_url(home_url('/about/'));?>">Read more→</a>
                        <img class="p-front-about__img" src="<?php echo esc_url( get_template_directory_uri() );?>/img/blog2.jpg">
                    </div>    
                </section>
                <section class="p-front-blog">
                    <div class="c-title-blog">
                        <h2><span>Blog</span></h2>
                    </div>
                    <div class="container">
                    <?php $args=array(
                        'tag'=>'info-blog',
                        'posts_per_page'=>3);
                                $custom_posts=get_posts($args);
                                foreach($custom_posts as $post): setup_postdata($post);?>
                    <article class="p-front-blog1">
                        <div class="p-front-blog1__title">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                        <div class="desc">
                            <h3>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                        </div>
                    </article>
                    <?php endforeach;?>
                    <div class="thumbs_bots"></div>
                    </div>
                </section>
            </main>
        <?php get_footer();?>    