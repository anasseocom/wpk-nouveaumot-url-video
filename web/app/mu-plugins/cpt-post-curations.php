<?php
/*
* On utilise une fonction pour créer notre custom post type 'Produits'
*/

function custom_post_type_curations() {

	// On rentre les différentes déno minations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Curations', 'Curations'),
		// Le nom au singulier
		'singular_name'       => _x( 'Curation', 'Curation'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Curations'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'All curation'),
		'view_item'           => __( 'See curation'),
		'add_new_item'        => __( 'Add a new curation'),
		'add_new'             => __( 'Add'),
		'edit_item'           => __( 'Edit the curation'),
		'update_item'         => __( 'Update the curation'),
		'search_items'        => __( 'Search for curation'),
		'not_found'           => __( 'Not found'),
		'not_found_in_trash'  => __( 'Not found in trash'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Curation'),
		'description'         => __( 'Our curations'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
        'rewrite'			  => array( 'slug' => 'curations'),
        'menu_icon'           => 'dashicons-video-alt3 ',
        'menu_position'       => 4,
		'publicly_queryable'  => false,
        'taxonomies' => array( 'category', 'post_tag' ),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "press" et ses arguments
	register_post_type( 'curations', $args );

}

add_action( 'init', 'custom_post_type_curations', 0 );