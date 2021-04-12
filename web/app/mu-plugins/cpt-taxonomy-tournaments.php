
<?php

add_action( 'init', 'create_tournaments_taxonomy', 0 );
 
function create_tournaments_taxonomy() {
  $labels = array(
    'name' => _x( 'Tournaments', 'Tournaments' ),
    'singular_name' => _x( 'Tournament', 'Tournament' ),
    'search_items' =>  __( 'Search a tournament' ),
    'all_items' => __( 'All tournaments' ),
    'edit_item' => __( 'Modify' ), 
    'update_item' => __( 'Update' ),
    'add_new_item' => __( 'Add an new tournament' ),
    'new_item_name' => __( 'Name of the new tournament' ),
    'menu_name' => __( 'Tournaments' ),
  );    

  register_taxonomy('tournaments',array('post'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'public' => false,
    'rewrite' => array( 'slug' => 'tournaments' ),
  ));
}