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