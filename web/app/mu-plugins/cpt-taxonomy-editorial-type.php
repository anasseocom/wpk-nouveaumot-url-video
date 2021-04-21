<?php

add_action( 'init', 'create_editorial_types_taxonomy', 0 );
 
function create_editorial_types_taxonomy() {
  $labels = array(
    'name' => _x( 'Editorial types', 'Editorial types' ),
    'singular_name' => _x( 'Editorial type', 'Editorial type' ),
    'search_items' =>  __( 'Search a, editorial type' ),
    'all_items' => __( 'All editorial types' ),
    'edit_item' => __( 'Modify' ), 
    'update_item' => __( 'Update' ),
    'add_new_item' => __( 'Add a new  editorial types' ),
    'new_item_name' => __( 'Name of the editorial types' ),
    'menu_name' => __( 'Editorial types' ),
  );    

  register_taxonomy('editorial-types',array('post'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'public' => false,
    'rewrite' => array( 'slug' => 'editorial-types' ),
  ));
}