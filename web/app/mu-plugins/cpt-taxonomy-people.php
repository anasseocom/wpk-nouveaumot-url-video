<?php

add_action( 'init', 'create_people_taxonomy', 0 );
 
function create_people_taxonomy() {
  $labels = array(
    'name' => _x( 'People', 'People' ),
    'singular_name' => _x( 'People', 'People' ),
    'search_items' =>  __( 'Search a human' ),
    'all_items' => __( 'All people' ),
    'edit_item' => __( 'Modify' ), 
    'update_item' => __( 'Update' ),
    'add_new_item' => __( 'Add a new  human' ),
    'new_item_name' => __( 'Name of the new human' ),
    'menu_name' => __( 'People' ),
  );    

  register_taxonomy('people',array('post'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'public' => false,
    'rewrite' => array( 'slug' => 'people' ),
  ));
}