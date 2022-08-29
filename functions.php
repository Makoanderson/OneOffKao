<?php function OneOffKao_theme_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'OneOffKao_theme_setup' );
function OneOffKao_enqueue_scripts() {
    wp_enqueue_style(
        'googlefonts',
        'https://fonts.googleapis.com/css?
        family=Philosopher',
        array(),
        '1.0.0'
    );
    wp_enqueue_style(
        'OneOffKao-theme-styles',
            get_template_directory_uri() . 
            '/styles.css/style.css',
            array(),
            '1.0.0'
    );
}
add_action( 'wp_enqueue_scripts', 'OneOffKao_enqueue_scripts');
?>

<?php
    register_nav_menu( $location, $description );

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
        }elseif(is_singular()){
            $tile=single_post_title(",false");
        }
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
