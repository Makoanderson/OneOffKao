<?php get_header('other');?>   
            <main class="l-Main">
                <div class="l-Main-wrapper">
                <article class="p-blog">
                    <?php while (have_posts()):the_post();?>
                    <header class="p-blog-info c-title">
                        <div class="c-title-blogtitle">
                            <h2><span><?php the_title();?></span></h2>
                        </div>
                        <p class="p-blog-date"><time>公開日:<?php the_time('Y/m/d');?></time>
                                                <time>最終更新日:<?php the_modified_date('Y/m/d') ?></time></p>
                        <p class="p-blog-cat">カテゴリー:<?php the_category("/");?></p>
                    </header>
                    <div class="p-blog-mv">
                        <?php the_post_thumbnail('large'); ?>
                        <?php the_content();?>
                        <?php the_tags();?>
                    </div>
                    <?php endwhile;?>
                </article>
                <?php get_sidebar();?>  
                </div>
            </main>
        <?php get_footer();?>    