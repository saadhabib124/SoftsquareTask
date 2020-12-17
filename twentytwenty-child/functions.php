<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION


/*
* Function for Products CPT
*/
 
function products_CPT() {
 
// Set UI labels for products CPT
    $labels = array(
        'name'                => _x( 'Products', 'Post Type General Name', 'Twenty Twenty Child' ),
        'singular_name'       => _x( 'Product', 'Post Type Singular Name', 'Twenty Twenty Child' ),
        'menu_name'           => __( 'Products', 'Twenty Twenty Child' ),
        'parent_item_colon'   => __( 'Parent Product', 'Twenty Twenty Child' ),
        'all_items'           => __( 'All Products', 'Twenty Twenty Child' ),
        'view_item'           => __( 'View Product', 'Twenty Twenty Child' ),
        'add_new_item'        => __( 'Add New Product', 'Twenty Twenty Child' ),
        'add_new'             => __( 'Add New', 'Twenty Twenty Child' ),
        'edit_item'           => __( 'Edit Product', 'Twenty Twenty Child' ),
        'update_item'         => __( 'Update Product', 'Twenty Twenty Child' ),
        'search_items'        => __( 'Search Product', 'Twenty Twenty Child' ),
        'not_found'           => __( 'Product Not Found', 'Twenty Twenty Child' ),
        'not_found_in_trash'  => __( 'Product Not found in Trash', 'Twenty Twenty Child' ),
    );
     
// Options for Products Custom Post Type
     
    $args = array(
        'label'               => __( 'Products', 'Twenty Twenty Child' ),
        'description'         => __( 'Products data', 'Twenty Twenty Child' ),
        'labels'              => $labels,
        // Features for Products CPT supports in Post Editor
        'supports'            => array( 'title', 'thumbnail'),
        // Taxonomy for Products CPT. 
        'taxonomies'          => array( 'category' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-excerpt-view',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' 		  => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'products', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'products_CPT', 0 );