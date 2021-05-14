<?php

add_action( 'init', 'create_video_types_taxonomy', 0 );
 
function create_video_types_taxonomy() {
  $labels = array(
    'name' => _x( 'Video Types', 'Video Types' ),
    'singular_name' => _x( 'Video Type', 'Video Type' ),
    'search_items' =>  __( 'Search a video type' ),
    'all_items' => __( 'All videos types' ),
    'edit_item' => __( 'Modify' ), 
    'update_item' => __( 'Update' ),
    'add_new_item' => __( 'Add a new  type' ),
    'new_item_name' => __( 'Name of the new type' ),
    'menu_name' => __( 'Video Types' ),
  );    

  register_taxonomy('video-types',array('videos'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'public' => true,
    'has_archive' => false,
    'rewrite' => array( 'slug' => 'video-types' ),
  ));
}