<aside class="l-sidebar p-blog-side">
    <div class="l-sidebar-menu">
                    <?php /*wp_tag_cloud('format=list');*/?>
                        <div class="p-blog-side__title">
                            <!--<img src="../img/GerberaPNG/g02.png">
                            <img src="../img/GerberaPNG/g03.png">-->
                            <h3><span>カテゴリー</span></h3>
                        </div>
                        <?php
                        wp_tag_cloud('format=list');?>
                        <?php
                        /*$args=array(
                            'smallest' => 16,
                            'largest' => 16,
                            'unit' => 'px',
                            'format' => 'list',
                        );*/
                        /*wp_tag_cloud(array('taxonomy'=> 'category'));*/
                        /*if ( is_active_sidebar( 'category_widget' ) ) :
                            dynamic_sidebar( 'category_widget' );
                            wp_tag_cloud('format=list');
                        else:
                            wp_tag_cloud('format=list');*/
                        ?>
                        <!--<ul class="p-blog-side__archivemenu">
                            <li><a href="#">新着情報</a></li>
                            <li><a href="#">お知らせ</a></li>
                            <li><a href="#">イヤリング</a></li>
                            <li><a href="#">ネックレス</a></li>
                        </ul>-->
                        <?php /*endif;*/?>
    </div>
    <div class="l-sidebar-list">
                    <?php
                        if ( is_active_sidebar( 'archive_widget' ) ) :
                            dynamic_sidebar( 'archive_widget' );
                        else:
                    ?>
                        <!--<div class="p-blog-side__archivetitle">
                            <img src="../img/GerberaPNG/g02.png">
                            <img src="../img/GerberaPNG/g03.png">
                            <h3><span>月別アーカイブ</span></h3>
                        </div>
                        <ul class="p-blog-side__list">
                            <li><a href="#">2022年4月 <span class="count">(1)</span></a></li>
                            <li><a href="#">2022年3月 <span class="count">(14)</span></a></li>
                            <li><a href="#">2022年2月 <span class="count">(1)</span></a></li>
                        </ul>-->
                        <?php endif;?>
    </div>
</aside>