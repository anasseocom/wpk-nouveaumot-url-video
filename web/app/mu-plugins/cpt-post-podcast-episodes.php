<?php
/*
* On utilise une fonction pour créer notre custom post type 'Podcasts'
*/

function custom_post_type_podcasts_episodes() {

	// On rentre les différentes déno minations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Podcast Episodes', 'Podcast Episodes'),
		// Le nom au singulier
		'singular_name'       => _x( 'Podcast Episode', 'Podcast Episode'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Podcasts'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'All podcast episodes'),
		'view_item'           => __( 'See episode'),
		'add_new_item'        => __( 'Add a new podcast episode'),
		'add_new'             => __( 'Add'),
		'edit_item'           => __( 'Edit episode'),
		'update_item'         => __( 'Update episode'),
		'search_items'        => __( 'Search for an episode'),
		'not_found'           => __( 'Not found'),
		'not_found_in_trash'  => __( 'Not found in trash'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Podcast Episode'),
		'description'         => __( 'Our podcast episodes'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'podcast'),
        'menu_icon'           => 'dashicons-format-audio',
        'menu_position'       => 4,
		'taxonomies'  => array( 'category', 'tags'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "press" et ses arguments
	register_post_type( 'podcast-episodes', $args );

}

add_action( 'init', 'custom_post_type_podcasts_episodes', 0 );