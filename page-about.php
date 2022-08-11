<!--<!DOCTYPE html>
<html lang="ja">
    <head>
        <mate charset="utf-8">
            <title>One-Off KAO</title>
        CSS 
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Philosopher">
        <link rel="stylesheet" href="../css/style.css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    </head>
    <body>
        <div class="l-wrapper">
            <header class="l-Header">
                <div class="l-Header__title">
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
                                    <a href="shop.html"><i class="fa-solid fa-cart-shopping"></i><br>
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
            <?php get_header();?>
            <main class="l-Main c-title">
                <?php if( have_posts()):
                    while( have_posts()):
                        the_post();
                    ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="c-title-about">
                    <!--<img class="c-title-about__img1" src="../img/GerberaPNG/g02.png">
                    <img class="c-title-about__img2" src="../img/GerberaPNG/g03.png">-->
                    <h2><span><?php the_title(); ?><!--About--></span></h2>
                </div>
                <div class="c-title-about-img">
                    <img src="<?php echo esc_url( get_template_directory_uri() );?>img/Header.jpg">
                </div>
                <?php the_post_thumbnail(); ?>
                <div class="p-about">
                    <div class="p-about-name">
                        <h3>プロフィール</h3>
                        <p>道田　香織　／　Michida Kaori</p>
                        <p>One-Off kao代表</p>
                        <p>（革花作家、革花講師、カラーセラピスト）</p>
                    </div>
                    <div class="p-about-from">
                        <h3>【出身地】</h3>
                        <p>愛知県名古屋市生まれ、長崎県五島市育ち</p>
                    </div>
                    <div class="p-about-story">
                        <h3>【経歴】</h3>
                        <p>元看護師。2017年に働いていた病院が閉院したのを機に退職。当時、趣味で革小物を作っていた兄に誘われたのをきっかけにレザークラフトを始める。その後、兄と二人でOne-Off（ワンオフ）という屋号で、革小物や革アクセサリーを制作販売。様々な作品を制作していくうちに革という素材の自由度の高さに魅力を感じ、ある日突然『革でお花を作ってみたい！』という衝動にかられ、以来ずっと革のお花を作り続けている。革のお花の作り方は習ったことがなく、全て自己流によるもの。主にアクセサリーを制作販売している。</p>
                    </div>
                    <div class="p-about-history">
                        <dl>
                            <dt>2018年</dt>
                            <dd>
                                minneにて販売開始
                            </dd>
                            <dt>2020年</dt>
                            <dd>
                                <p>カラーセラピスト資格取得</p>
                                <p>長崎県時津町のふるさと返礼品</p>
                                <p>として革花アクセサリーの取扱開始</p>
                                <p>長崎県美術館にて、革花講師を務める</p>
                            </dd>
                            <dt>2021年</dt>
                            <dd>
                                <p>Creema、Baseにて販売開始</p>
                                <p>革花アクセサリー One-Off Kao 開業</p>
                                <p>児童館にて、カラーセラピスト講師を務める</p>
                            </dd>
                        </dl>
                    </div>
                    <div class="p-about-experience">
                        <h3>【実績】</h3>
                        <ul>
                            <li>2018年～2021年　販売実績500点以上</li>
                            <li>minne、Creemaでの特集掲載10回以上</li>
                            <li>【minneとものづくりと】企画参加<br>→花びらをスキャンカットで。<br>帽子に集まる「春」を再現。<br>→【特別企画】想いは、つながる。<br>あなたに届けたいニベアフォーチュンデコ缶。</li>
                        </ul>
                    </div>
                    <div class="p-about-skilled">
                        <h3>【得意なこと】</h3>
                        <ul>
                            <li>革の染色</li>
                            <li>模写（特に植物、マンガのキャラクター等）</li>
                        </ul>
                    </div>
                    <div class="p-about-hobby">
                        <h3>【趣味、好きなこと】</h3>
                        <ul>
                            <li>タロット占い</li>
                            <li>ピアノ弾き語り</li>
                        </ul>
                    </div>
                    <div class="p-about-sns">
                        <h3>【SNS】</h3>
                        <ul>
                            <li>Instagram</li>
                            <li><a href="https://www.instagram.com/oneoff_kao/">https://www.instagram.com/oneoff_kao/</a></li>
                            <li>Facebook</li>
                            <li><a href="https://www.facebook.com/oneoffkao/">https://www.facebook.com/oneoffkao/</a></li>
                        </ul>
                    </div>
                </div>
                <div class="c-title-about-bot">
                    <img id="img1" src="<?php echo esc_url( get_template_directory_uri() );?>/img/blog2.jpg">
                    <img id="img2" src="<?php echo esc_url( get_template_directory_uri() );?>/img/blog3.jpg">
                </div>
                </article>
                <?php endwhile; ?>
            <?php endif; ?>    
            </main>
            <?php get_footer();?>
            <!--<footer class="l-Foot c-Footer">
                <div class="l-Foot__logo">
                    <div class="c-Footer__logo">
                        <img src="../img/One-Off logo black[708].png">
                    </div>
                </div>    
                <div class="c-Footer__icon">
                    <i class="fa-brands fa-facebook-square"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <div class="l-Foot__nav">
                    <ul class="c-Footer__nav__menu">
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
                </div>
            </footer>
        </div>
    </body>
</html>-->