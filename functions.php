<?php function OneOffKao_theme_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'OneOffKao_theme_setup' );
function OneOffKao_enqueue_scripts() {
    wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css?family=Philosopher',
        array(),
        '1.0.0');
    wp_enqueue_style(
        'OneOffKao-theme-styles', get_template_directory_uri() . 
            '/styles.css/style.css',
            array(),
            '1.0.0');
}
add_action( 'wp_enqueue_scripts', 'OneOffKao_enqueue_scripts');
?>

<?php 
    /*register_nav_menu( $location, $description );*/

    function twpp_setup_theme() {
        register_nav_menus( array(
            'header-navigation'=> 'Header Navigation',
            'footer-navigation'=> 'Footer Navigation',
            'spheader' => 'SP Header',
            'header-navi' => 'Header Navi'
        ) );
    }
    add_action( 'after_setup_theme', 'twpp_setup_theme' );
    /*wp_nav_menu( $headerNav );*/

    
    /*wp_nav_menu( $footerNav );*/

    function OneOffKao_title( $title){
        if(is_front_page()&&is_home()){
            $title=get_bloginfo('name', 'dispaly');
        }/*elseif(is_singular()){
            $title=single_post_title(",false");
        }*/
        return $title;
        }
        add_filter('pre_get_document_title', 'OneOffKao_title');
?>

<?php
function post_has_archive( $args, $post_type ) {
    if ( 'post' == $post_type ) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'blog-archive'; //URLとして使いたい文字列
    }
    return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );
?>

<?php 
add_theme_support('post-thumbnails');
set_post_thumbnail_size(200, 200);
?>

<?php
if (! function_exists('fa_custom_setup_kit') ) {
  function fa_custom_setup_kit($kit_url = '') {
    foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
      add_action(
        $action,
        function () use ( $kit_url ) {
          wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
        }
      );
    }
  }
}
fa_custom_setup_kit('https://kit.fontawesome.com/1ff6e5547b.js');
/*wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v6.1.1/css/all.css', array(), '6.1.1' );*/
/*wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/font-awesome/css/all.min.css', array());
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
 wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/font-awesome/css/all.min.css', array());
}*/

?>

<?php 
function wpbeg_widgets_init() {
    register_sidebar (
        array(
            'name'          => 'カテゴリーウィジェット',
            'id'            => 'category_widget',
            'description'   => 'カテゴリー用ウィジェットです',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
            'after_title'   => "</h2>\n",
        )
    );
    register_sidebar(
        array(
            'name'          => 'アーカイブウィジェット',
            'id'            => 'archive_widget',
            'description'   => 'アーカイブ用ウィジェットです',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2><i class="fa fa-archive" aria-hidden="true"></i>',
            'after_title'   => "</h2>\n",
        )
    );
}
add_action( 'widgets_init', 'wpbeg_widgets_init' );
?>

<?php 
    /*add_action('pre_get_posts', 'my_pre_get_posts');
    function my_pre_get_posts( $query) {
        if($query->is_admi()|| !$query->is_main_query()) {
            return;
        }
        if ( $query->is_home()){
            $query->set('posts_per_page', 3);
            return;
        }
    }
*/?>

<?php
//タクソノミーの設定
    /*add_action('init', 'create_blog_taxonomies', 0);*/
    /*add_action('init', 'create_post_type');*/

    //"Blog"カスタム投稿タイプに対してblogというカスタム分類を作成する
    /*function create_post_type(){
        register_post_type(
            'blog',
            array(
                'label' => 'blog',
                'public' => true,
                'has_archive' => true,
                'show_in_rest' => true,
                'menu_position' => 5,
                'supports' => array (
                    'title',
                    'editor',
                    'thumbnail',
                    'revisions'
                ),
            )
        );
        register_taxonomy (
            'blog-cat',
            'blog',
            array (
                'label' => 'ブログカテゴリー',
                'hierarchical' => true,
                'public' => true,
                'show_in_rest' => true,
            )
            );
    }*/
?>
<?php /*add_theme_support( ‘automatic-feed-links’ );*/ ?>