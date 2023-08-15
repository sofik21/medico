<?php 
 
if( ! defined( "CSS_DIR" ) ){
    define( "CSS_DIR", get_stylesheet_directory_uri() . '/assets/css' );
}
if( ! defined( "JS_DIR" ) ){
    define( "JS_DIR", get_stylesheet_directory_uri() . '/assets/js' );
}


function wp_medico_asstes(){
    //js files
    wp_enqueue_script( 'jquery' );
    //wp_enqueue_script( 'fidvit_js',  JS_DIR .'/jquery.fitvids.js');
    wp_enqueue_script( 'script_js',  JS_DIR .'/script.js');
    wp_enqueue_script( 'owl_carousel_js',  JS_DIR .'/owl.carousel.min.js');

    //css files
    wp_enqueue_style( 'main', CSS_DIR . '/tailwind.css' , false, time());
    wp_enqueue_style( 'owl_carousel_css', CSS_DIR . '/owl.carousel.min.css' , false, time());
    wp_enqueue_style( 'fontawosome', CSS_DIR . '/all.min.css');
    wp_enqueue_style( 'wpzarek', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'wp_medico_asstes' );


//after setup theme function 

function wptheme_setup(){
    
    add_image_size( 'postcard', 550, 365, true );
    add_image_size( 'post-thumbnail', 1280, 450, true );

    // theme supports
    add_theme_support('align-wide');
    add_theme_support('custom-header');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height' => 65,
        'width'  => 150,
    ) );
    add_theme_support('title-tag');

    //regester nav menus

    register_nav_menus(array(
        'header_menu'=> __('Header Menu','wpmedico'),
        'footer_menu'=> __('Footer Menu','wpmedico'),
    ));

}

add_action('after_setup_theme','wptheme_setup');



//regester custom posts-----------------

function wpmedico_custom_posts(){
// progerms
    register_post_type( 'progerms', [
        'labels' =>  [
            'name'              => esc_html__('progerms','wpmedico'),
            'singular_name '    => 'progerms',
            'all_items'         => 'All properties',
            'add_new'           => 'Add new property',
        ],
        'show_ui'           => true,
        'menu_icon'         => 'dashicons-admin-home',
        'menu_position'     => 20,
        'supports'          => ['title','editor','thumbnail'],
        'publicly_queryable'=> true,
    ] );
    
    register_taxonomy( 'progerms-type', 'progerms', [
        'label'          => 'progerms-type',
        'show_ui'        => true,
        'hierarchical'   => true,
    ] );
// branch
    register_post_type( 'branch', [
        'labels' =>  [
            'name'              => esc_html__('branch','wpmedico'),
            'singular_name '    => 'branch',
            'all_items'         => 'All branch',
            'add_new'           => 'Add new branch',
        ],
        'show_ui'           => true,
        'menu_icon'         => 'dashicons-admin-home',
        'menu_position'     => 20,
        'supports'          => ['title','editor','thumbnail'],
        'publicly_queryable'=> true,
    ] );
    
    register_taxonomy( 'branch-type', 'branch', [
        'label'          => 'branch-type',
        'show_ui'        => true,
        'hierarchical'   => true,
    ] );

// success
    register_post_type( 'success', [
        'labels' =>  [
            'name'              => esc_html__('success','wpmedico'),
            'singular_name '    => 'success',
            'all_items'         => 'All success',
            'add_new'           => 'Add new success',
        ],
        'show_ui'           => true,
        'menu_icon'         => 'dashicons-admin-home',
        'menu_position'     => 20,
        'supports'          => ['title','thumbnail'],
        'publicly_queryable'=> true,
    ] );

    register_taxonomy( 'success-type', 'success', [
        'label'          => 'success-type',
        'show_ui'        => true,
        'hierarchical'   => true,
    ] );

   
}


add_action( 'init','wpmedico_custom_posts' );



function wpmedico_sidebars(){
    register_sidebar( [
        'name'          => __( 'Main Sidebar One', 'medico' ),
        'id'            => 'sidebar_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
    ] );
    register_sidebar( [
        'name'          => __( 'Main Sidebar Two', 'medico' ),
        'id'            => 'sidebar_2',
        'before_widget' => '',
        'after_widget'  => '',
         
    ] );
    register_sidebar( [
        'name'          => __( 'Main Sidebar Three', 'medico' ),
        'id'            => 'sidebar_3',
        'before_widget' => '',
        'after_widget'  => '',
    ] );
}
add_action( 'widgets_init', 'wpmedico_sidebars' );



// View Count -----------------

// function wpmm_set_postgrid_views($postID) {
//     $count_key = 'wpmm_postgrid_views';
//     $count = get_post_meta($postID, $count_key, true);
//     if($count==''){
//         $count = 0;
//         delete_post_meta($postID, $count_key);
//         add_post_meta($postID, $count_key, '0');
//     }else{
//         $count++;
//         update_post_meta($postID, $count_key, $count);
//         echo update_post_meta();
//     }
// }
// function wpmm_track_postgrid_views ($post_id) {
//     if ( !is_single() ) return;
//     if ( empty ( $post_id) ) {
//         global $post;
//         $post_id = $post->ID;
//     }
//    echo wpmm_set_postgrid_views($post_id);
// }

// add_action( 'wp_head', 'wpmm_track_postgrid_views');



// ------------------------------------



function da_get_views_post($post_id){
    $key = 'post_views_count';

    $count = get_post_meta($post_id,$key, true);

    if($count == ''){
        $count = 0;
        delete_post_meta($post_id,$key);
        add_post_meta($post_id,$key,$count);
    }else{
        $count++;
        update_post_meta($post_id,$key, $count);
    }
}

function da_get_post_views($post_id){
    $key = 'post_views_count';
    $count = get_post_meta($post_id,$key, true);
    if($count == ''){
        $count = 0;
        delete_post_meta($post_id,$key);
        add_post_meta($post_id,$key,$count);
        return "0 View";
    }
    return $count. ' Views';
}






// include acf fild group

include get_template_directory() . '/inc/acf_filds_group.php';





// Pagination Pages for Custom Post Type

// function disable_pagination( $query ) {
//     if( get_post_type() == 'success' ) {
//       $query->set( 'nopaging' , true );
//     }
//   }
//   add_action( 'pre_get_posts', 'disable_pagination' );