<?php
/*
* On utilise une fonction pour créer notre custom post type 'Produits'
*/

function custom_post_type_partners() {

	// On rentre les différentes déno minations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Partners', 'Partners'),
		// Le nom au singulier
		'singular_name'       => _x( 'Partners', 'Partners'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Partners'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'All partners'),
		'view_item'           => __( 'All partners'),
		'add_new_item'        => __( 'Add a new partner'),
		'add_new'             => __( 'Add'),
		'edit_item'           => __( 'Edit'),
		'update_item'         => __( 'Modify'),
		'search_items'        => __( 'Search a partner'),
		'not_found'           => __( 'Not found'),
		'not_found_in_trash'  => __( 'Not found'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Partner'),
		'description'         => __( 'All about partners'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => false,
        'rewrite'			  => array( 'slug' => 'partners'),
        'menu_icon'           => 'dashicons-share',
        'menu_position'       => 6,

	);
	
	// On enregistre notre custom post type qu'on nomme ici "press" et ses arguments
	register_post_type( 'partners', $args );

}

add_action( 'init', 'custom_post_type_partners', 0 );