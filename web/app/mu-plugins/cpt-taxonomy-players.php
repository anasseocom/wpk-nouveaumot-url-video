<?php

add_action( 'init', 'create_players_taxonomy', 0 );
 
function create_players_taxonomy() {
  $labels = array(
    'name' => _x( 'Players', 'Players' ),
    'singular_name' => _x( 'Player', 'Player' ),
    'search_items' =>  __( 'Searcha player' ),
    'all_items' => __( 'All players' ),
    'edit_item' => __( 'Modify' ), 
    'update_item' => __( 'Update' ),
    'add_new_item' => __( 'Add a new  player' ),
    'new_item_name' => __( 'Name of the new player' ),
    'menu_name' => __( 'Players' ),
  );    

  register_taxonomy('players',array('post'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'public' => false,
    'rewrite' => array( 'slug' => 'players' ),
  ));
}