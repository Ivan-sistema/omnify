<?php



require get_template_directory()."/include/setup.php";
require get_template_directory()."/include/customizer/theme-customizer.php";

//hooks







//--Adiciona Css,Style etc.

add_action("wp_enqueue_scripts", "reformarq_theme_styles");
add_action("after_setup_theme", "reformarq_after_setup");
add_action("widgets_init", "reformarq_widgets");
add_action("customize_register", "reformarq_customize_register");



function create_post_type() {



//   register_post_type( 'produto',array(
//     'labels' => array(
//     'name' => __( 'Produto' ),
//     'singular_name' => __( 'produto' )
//     ),

//     'public' => true,
//     'show_ui' => true,
//     'show_in_menu' => true,
//     'rewrite' => array('slug' => 'produtos'),
//     'capability_type' => 'page',
//     'has_archive' => true,
//     'menu_position' => 5,
//     'supports' => array('title', 'editor', 'author', 'thumbnail')
//   )
// );


// register_post_type( 'atendimento',array(
//   'labels' => array(
//   'name' => __( 'Atendimento' ),
//   'singular_name' => __( 'atendimento' )
//   ),

//   'public' => true,
//   'show_ui' => true,
//   'show_in_menu' => true,
//   'rewrite' => array('slug' => 'atendimento'),
//   'capability_type' => 'page',
//   'has_archive' => true,
//   'menu_position' => 5,
//   'supports' => array('title', 'editor', 'author', 'thumbnail')
// )
// );


// register_post_type( '404',array(
//   'labels' => array(
//   'name' => __( '404' ),
//   'singular_name' => __( '404' )
//   ),

//   'public' => true,
//   'show_ui' => true,
//   'show_in_menu' => true,
//   'rewrite' => array('slug' => '404'),
//   'capability_type' => 'page',
//   'has_archive' => true,
//   'menu_position' => 7,
//   'supports' => array('title', 'editor', 'author', 'thumbnail')
// )
// );

// register_post_type( 'servicos',

// array(
//   'labels' => array(
//   'name' => __( 'Serviços' ),
//   'singular_name' => __( 'Serviço' )
//   ),

//   'public' => true,
//   'show_ui' => true,
//   'show_in_menu' => true,
//   'rewrite' => array('slug' => 'servico'),
//   'capability_type' => 'page',
//   'has_archive' => true,
//   'menu_position' => 4,
//   'supports' => array('title', 'editor', 'author', 'thumbnail')
// )
// );

// register_post_type( 'cases',

// array(
//   'labels' => array(
//   'name' => __( 'Cases' ),
//   'singular_name' => __( 'Cases' )
//   ),

//   'public' => true,
//   'show_ui' => true,
//   'show_in_menu' => true,
//   'rewrite' => array('slug' => 'cases'),
//   'capability_type' => 'page',
//   'has_archive' => true,
//   'menu_position' => 4,
//   'supports' => array('title', 'editor', 'author', 'thumbnail')
// )
// );

// register_post_type( 'leonemobille',

// array(
//   'labels' => array(
//   'name' => __( 'Leone Mobille' ),
//   'singular_name' => __( 'leonemobille' )
//   ),

//   'public' => true,
//   'show_ui' => true,
//   'show_in_menu' => true,
//   'rewrite' => array('slug' => 'leonemobille'),
//   'capability_type' => 'page',
//   'has_archive' => true,
//   'menu_position' => 4,
//   'supports' => array('title', 'editor', 'author', 'thumbnail')
// )
// );

// register_post_type( 'banner',

// array(
//   'labels' => array(
//   'name' => __( 'Banner' ),
//   'singular_name' => __( 'Banners' )
//   ),

//   'public' => true,
//   'show_ui' => true,
//   'show_in_menu' => true,
//   'rewrite' => array('slug' => 'banner'),
//   'capability_type' => 'page',
//   'has_archive' => true,
//   'menu_position' => 4,
//   'supports' => array('title', 'editor', 'author', 'thumbnail')
// )
// );


}

add_action( 'init', 'create_post_type' );