<?php

function cptui_support_author_archive( $query ) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}

	if ( is_author() ) {
		$query->set(
			'post_type', [
				'post',
				'videos',
			]
		);
	}
}
add_action( 'pre_get_posts', 'cptui_support_author_archive' );
