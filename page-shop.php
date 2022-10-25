<?php get_header('other');?>   
            <main class="l-Main c-title">
                <div class="c-title-shop">
                    <h2><span>Shop一覧</span></h2>
                </div>
                <?php $args=['category_name'=>'info-all-store'];
                $custom_posts=get_posts($args);
                foreach($custom_posts as $post):setup_postdata($post);?>
                <div class="p-shop-infoboxtitle">
                    <p><?php the_title();?></p>
                </div>
                <div class="p-shop-infobox">
                    <p><?php echo get_the_excerpt();?></p>
                </div>
                <?php endforeach;?>
                <div class="thumbs_bots"></div>
                <?php $args=['category_name'=>'shop-info'];
                $custom_posts=get_posts($args);
                foreach($custom_posts as $post):setup_postdata($post);?>
                <div class="p-shop">
                    <div class="p-shop-img">
                        <?php the_post_thumbnail('large');?>
                    </div>
                    <div class="p-shop-text">
                        <h3>
                            <a href="<?php the_permalink();?>"><!--←BASEでお求めの方はこちらです。-->
                            <?php the_title();?>
                            <!--<p>お店ごとのお知らせ。</p>-->
                            </a>
                        </h3>
                        <?php echo mb_substr(get_the_excerpt(),0,50);?>
                        <a href="<?php the_permalink();?>">Read more→</a>
                    </div>
                </div>
                <?php endforeach;?>
                <div class="thumbs_bots"></div>
            </main>
        <?php get_footer();?>    