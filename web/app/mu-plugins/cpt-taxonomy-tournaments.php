
<?php

add_action( 'init', 'create_tournaments_taxonomy', 0 );
 
function create_tournaments_taxonomy() {
  $labels = array(
    'name' => _x( 'Tournois', 'Tournois' ),
    'singular_name' => _x( 'Tournoi', 'Tournoi' ),
    'search_items' =>  __( 'Rechercher un tournoi' ),
    'all_items' => __( 'Tous les tournois' ),
    'edit_item' => __( 'Modifier le tag' ), 
    'update_item' => __( 'Mettre à jour' ),
    'add_new_item' => __( 'Ajouter un nouveau' ),
    'new_item_name' => __( 'Nom du nouveau tournoi' ),
    'menu_name' => __( 'Tournois' ),
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