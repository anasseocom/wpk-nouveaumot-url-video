<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

function has_video($post){

	if ( has_shortcode( $post->post_content, 'mot_video') ) {

		return  true;
	}
	return false;
}

function my_restrict_manage_posts() {
    global $typenow;
    $args=array( 'public' => true, '_builtin' => false ); 
    $post_types = get_post_types($args);
    if ( in_array($typenow, $post_types) ) {
    $filters = get_object_taxonomies($typenow);
        foreach ($filters as $tax_slug) {
            $tax_obj = get_taxonomy($tax_slug);
            wp_dropdown_categories(array(
                'show_option_all' => __('Show All '.$tax_obj->label ),
                'taxonomy' => $tax_slug,
                'name' => $tax_obj->name,
                'orderby' => 'term_order',
                'selected' => $_GET[$tax_obj->query_var],
                'hierarchical' => $tax_obj->hierarchical,
                'show_count' => false,
                'hide_empty' => true
            ));
        }
    }
}
function my_convert_restrict($query) {
    global $pagenow;
    global $typenow;
    if ($pagenow=='edit.php') {
        $filters = get_object_taxonomies($typenow);
        foreach ($filters as $tax_slug) {
            $var = &$query->query_vars[$tax_slug];
            if ( isset($var) ) {
                $term = get_term_by('id',$var,$tax_slug);
                $var = $term->slug;
            }
        }
    }
}


/**
 * CACHE
 */
add_action( 'save_post', 'purge_articles', 10, 3 );

/**
 * purge articles and home page after update post
 */
function purge_articles( $post_id, $post, $update ) {
    global $post;
    purge_url(get_permalink($post->ID));
}

function purge_url( $url ){

	$parse_url = parse_url($url) ;
	$home_url = $parse_url['scheme'] .'://' .$parse_url['host'].'/' ;
	$url_to_purge = str_replace($home_url, $home_url . 'purge/', $url ) ;

	wp_remote_get($url_to_purge);
	$ch = curl_init($url_to_purge);
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (iPhone; U; CPU like Mac OS X; en) AppleWebKit/420.1 (KHTML, like Gecko) Version/3.0 Mobile/3B48b Safari/419.3');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_exec($ch);
	curl_close($ch);
}


