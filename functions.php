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
            '/css/style.css/style.css',
            array(),
            '1.0.0'
    );
}
add_action( 'wp_enqueue_scripts', 'OneOffKao_enqueue_scripts');
?>

<?php
    add_theme_support( 'menus' );

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
