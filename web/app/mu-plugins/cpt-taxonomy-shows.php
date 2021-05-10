<?php

add_action( 'init', 'create_shows_taxonomy', 0 );
 
function create_shows_taxonomy() {
  $labels = array(
    'name' => _x( 'Shows', 'Shows' ),
    'singular_name' => _x( 'Show', 'Show' ),
    'search_items' =>  __( 'Search a show' ),
    'all_items' => __( 'All shows' ),
    'edit_item' => __( 'Modify' ), 
    'update_item' => __( 'Update' ),
    'add_new_item' => __( 'Add a new  show' ),
    'new_item_name' => __( 'Name of the new show' ),
    'menu_name' => __( 'Shows' ),
  );    

  register_taxonomy('shows',array('videos'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'public' => true,
    'has_archive' => true,
    'rewrite' => array( 'slug' => 'video-series' ),
  ));
}