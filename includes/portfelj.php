<?php
if ( ! function_exists( 'portfolio_cp' ) ) {
    function portfolio_cp() {
 
        $labels = array(
            'name'                => _x( 'Portfolio', 'Post Type General Name', 'portfolio' ),
            'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'portfolio' ),
            'menu_name'           => __( 'Portfolio', 'portfolio' ),
            'parent_item_colon'   => __( 'Parent:', 'portfolio' ),
            'all_items'           => __( 'All portfolios', 'portfolio' ),
            'view_item'           => __( 'View portfolios', 'portfolio' ),
            'add_new_item'        => __( 'Add new portfolio', 'portfolio' ),
            'add_new'             => __( 'Add new', 'portfolio' ),
            'edit_item'           => __( 'Edit portfolio', 'portfolio' ),
            'update_item'         => __( 'Update portfolio', 'portfolio' ),
            'search_items'        => __( 'Search portfolios', 'portfolio' ),
            'not_found'           => __( 'Not found', 'portfolio' ),
            'not_found_in_trash'  => __( 'Not found in trash', 'portfolio' ),
        );
        $args = array(
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail',),
            'taxonomies'          => array( 'portfolio_tax' ),
            'public'              => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-smiley',
            'has_archive'         => true,
        );
        register_post_type( 'portfolio', $args );
        flush_rewrite_rules();
 
    }
 
    add_action( 'init', 'portfolio_cp', 0 );
 
}
?>
<?php
if ( ! function_exists( 'portfolio_tax' ) ) {
 
    function portfolio_tax() {
 
        $labels = array(
            'name'                       => _x( 'Portfolio categories', 'Taxonomy General Name', 'portfolio' ),
            'singular_name'              => _x( 'Portfolio category', 'Taxonomy Singular Name', 'portfolio' ),
            'menu_name'                  => __( 'Categories', 'portfolio' ),
            'all_items'                  => __( 'Categories', 'portfolio' ),
            'parent_item'                => __( 'portfolio parent category', 'portfolio' ),
            'parent_item_colon'          => __( 'portfolio parent category:', 'portfolio' ),
            'new_item_name'              => __( 'New category', 'portfolio' ),
            'add_new_item'               => __( 'Add new category', 'portfolio' ),
            'edit_item'                  => __( 'Edit category', 'portfolio' ),
            'update_item'                => __( 'Update category', 'portfolio' ),
            'search_items'               => __( 'Search', 'portfolio' ),
            'add_or_remove_items'        => __( 'Add or delete category', 'portfolio' ),
            'choose_from_most_used'      => __( 'Choose from most used', 'portfolio' ),
            'not_found'                  => __( 'Not found', 'portfolio' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'has_archive'                => true,
            'rewrite'                    => array( 'slug' => 'portfolio' ),
        );
        register_taxonomy( 'portfolio_tax', array( 'portfolio' ), $args );
 
    }
 
    add_action( 'init', 'portfolio_tax', 0 );
 
}
?>