<?php

add_action( 'init', 'create_podcasts_shows_taxonomy', 0 );
 
function create_podcasts_shows_taxonomy() {
  $labels = array(
    'name' => _x( 'Podcasts Shows', 'Podcasts Shows' ),
    'singular_name' => _x( 'podcast Show', 'podcast Show' ),
    'search_items' =>  __( 'Search a podcast show' ),
    'all_items' => __( 'All podcast shows' ),
    'edit_item' => __( 'Modify' ), 
    'update_item' => __( 'Update' ),
    'add_new_item' => __( 'Add a new  podcast show' ),
    'new_item_name' => __( 'Name of the new podcast show' ),
    'menu_name' => __( 'Podcasts Shows' ),
  );    

  register_taxonomy('podcasts-shows',array('podcast-episodes'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'public' => true,
    'has_archive' => true,
    'rewrite' => array( 'slug' => 'podcasts' ),
  ));
}