<?php
/*
* On utilise une fonction pour créer notre custom post type 'Produits'
*/

function custom_post_type_videos() {

	// On rentre les différentes déno minations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Vidéos', 'Vidéos'),
		// Le nom au singulier
		'singular_name'       => _x( 'Vidéo', 'Vidéo'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Videos'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'All videos'),
		'view_item'           => __( 'See video'),
		'add_new_item'        => __( 'Add a new video'),
		'add_new'             => __( 'Add'),
		'edit_item'           => __( 'Edit the video'),
		'update_item'         => __( 'Update the video'),
		'search_items'        => __( 'Search for video'),
		'not_found'           => __( 'Not found'),
		'not_found_in_trash'  => __( 'Not found in trash'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Video'),
		'description'         => __( 'Our videos'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'videos'),
        'menu_icon'           => 'dashicons-video-alt3 ',
        'menu_position'       => 4,
        'taxonomies' => array( 'category', 'post_tag' ),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "press" et ses arguments
	register_post_type( 'videos', $args );

}

add_action( 'init', 'custom_post_type_videos', 0 );