<?php function OneOffKao_theme_setup() {
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
    add_action('init', 'create_post_type');

    //"Blog"カスタム投稿タイプに対してblogというカスタム分類を作成する
    function create_post_type(){
        register_post_type(
            'blog',
            array(
                'label' => 'blog'
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
    }
    /*function create_blog_taxonomies (){
        $labels = array (
            'name' => _x('blog', 'taxonomy general name'),
            'singular_name' => _x('blog', 'taxonomy singular name'),
            'product' => __('product blog'),
            'info-blog' => __('infor-blog blog'),
            'parent_item' => null,
            'parent_item_colon' => null,
            'edit_item' => __('Edit blog'),
            'update_item' => __('Update blog'),
            'add_new_item' => __('Add New blog'),
            'new_item_name' => __('New blog name'),
            'separate_items_with_commas' => __('Separate blog with commas'),
            'add_or_remove_items' => __('Add or remove blog'),
            'choose_from_most_used' => __('Choose from the most used blog'),
            'not_found' => __('No blog found.'),
            'menu_name' => __('blog'),
        );
        $args=array(
            'hierarchical' => false,
            'lables' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'update_ount_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array('slug'=>'blog'),
        );
        register_taxonomy ('blog', 'Blog', $args);
    }*/
?>