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