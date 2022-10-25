<?php get_header('other');?>   
            <main class="l-Main">
                <section class="c-title">
                    <div class="c-title-blog">
                    <h2><span>Blog</span></h2>
                    </div>
                </section>
                <section class="p-archive">
                    <?php $args=array(
                        'category_name'=> 'all-info',
                        'paged'=> get_query_var('paged',1));
                            $custom_posts=get_posts($args);
                            if($custom_posts):
                            foreach($custom_posts as $post): setup_postdata($post);?>
                    <div class="p-archive-main">
                        <div class="p-archive-main-img">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                        <div class="p-archive-main-text">
                            <h3>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <?php echo mb_substr(get_the_excerpt(), 0, 50);?>
                                <a href="<?php the_permalink();?>">続きを読む→</a>
                        </div>
                    </div>
                    <?php wp_link_pages();?>
                    <?php endforeach;else:?>
                    <div class="thumbs_bots"></div>
                    <?php endif;
                            wp_reset_postdata();?>
                </section>
                <?php wp_pagenavi(); ?>
            </main>
        <?php get_footer();?>    