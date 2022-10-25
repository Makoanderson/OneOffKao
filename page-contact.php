            <?php get_header('other');?>
            <main class="l-Main c-title p-inquiry">
            <?php if( have_posts()):
                    while( have_posts()):
                        the_post();
                    ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="c-title-inquiry">
                    <h2><span>お問い合わせ</span></h2>
                </div>
                <div class="p-inquiry-mv">
                    <p class="inquiry-image"><img class="inquiry-img" src="<?php echo esc_url( get_template_directory_uri() );?>/img/blog2.jpg"></p>
                    <p class="inquiry-toi">お気軽にお問い合わせください。</p>
                </div>
                <?php echo apply_shortcodes( '[contact-form-7 id="84" title="コンタクトフォーム 1"]' ); ?>
                </article>
                <?php endwhile; ?>
            <?php endif; ?>
            </main>
            <?php get_footer();?>