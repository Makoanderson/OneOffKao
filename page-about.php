            <?php get_header('other');?>
            <main class="l-Main c-title">
                <?php if( have_posts()):
                    while( have_posts()):
                        the_post();
                    ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="c-title-about">
                    <h2><span><?php the_title(); ?></span></h2>
                </div>
                <div class="c-title-about-img">
                    <?php the_post_thumbnail('large'); ?>
                </div>
                <section class="wp-about">
                <div class="p-about">
                    <?php the_content();?>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
                <?php $args=['category_name'=>'pictures'];
                    $custom_posts=get_posts($args);
                    foreach($custom_posts as $post):setup_postdata($post);?>
                <div class="c-title-about-bot">
                    <?php the_content();?>
                </div>
                </section>
                </article>
                <?php endforeach;?>   
            </main>
            <?php get_footer();?>