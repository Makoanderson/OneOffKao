<aside class="l-sidebar p-blog-side">
    <div class="l-sidebar-menu">
                        <div class="p-blog-side__title">
                            <h3><span>カテゴリー</span></h3>
                        </div>
                        <?php
                        wp_tag_cloud('format=list');?>
    </div>
    <div class="l-sidebar-list">
                    <?php
                        if ( is_active_sidebar( 'archive_widget' ) ) :
                            dynamic_sidebar( 'archive_widget' );
                        else:
                    ?>
                    <?php endif;?>
    </div>
</aside>