<?php

function get_previous_video($post) {
    $previous_video = get_field('video_previous');

    if(!$previous_video) {
        $id_prev = get_prev_video_id($post);
        $post_prev = get_post($id_prev);
        $previous_video = $post_prev;
    }

    return $previous_video;
}

function get_next_video($post) {
    $next_video = get_field('video_next');

    if(!$next_video) {
        $id_next = get_next_video_id($post);
        $post_next = get_post($id_next);
        $next_video = $post_next;
    }

    return $next_video;
}


function get_prev_video_id($post) {
    global $post;
    $post_id = $post->ID;
    $current_term_id = null;
    $terms = get_the_terms( $post->ID, 'shows' ); 
    if($terms != null) {
        foreach($terms as $term) {
            $current_term = $term;
          }
          $current_term_id = $current_term->term_id;

          $args = array( 
            'post_type' => 'videos',
            'tax_query' => array(
                array(
                    'taxonomy' => 'shows',
                    'field' => 'slug',
                    'terms' => $current_term->slug,
                )
            )
        );

        $posts = get_posts( $args );

        $ids = array();
        foreach ( $posts as $thepost ) {
            $ids[] = $thepost->ID;
        }

        $thisindex = array_search( $post_id, $ids );
        $previd    = isset( $ids[ $thisindex - 1 ] ) ? $ids[ $thisindex - 1 ] : false;
        
        if (false !== $previd ) {
            return $previd;
        } else {
            return end($ids);
        }
    }
}

function get_next_video_id($post) {
    global $post;
    $post_id = $post->ID;
    $current_term_id = null;
    $terms = get_the_terms( $post->ID, 'shows' ); 
    if($terms != null) {
        $terms = get_the_terms( $post->ID, 'shows' ); 
        foreach($terms as $term) {
        $current_term = $term;
        }
        $current_term_id = $current_term->term_id;

        $args = array( 
            'post_type' => 'videos',
            'tax_query' => array(
                array(
                    'taxonomy' => 'shows',
                    'field' => 'slug',
                    'terms' => $current_term->slug,
                )
            )
        );

        $posts = get_posts( $args );

        $ids = array();
        foreach ( $posts as $thepost ) {
            $ids[] = $thepost->ID;
        }

        $thisindex = array_search( $post_id, $ids );
        $nextid    = isset( $ids[ $thisindex + 1 ] ) ? $ids[ $thisindex + 1 ] : false;
        
        if (false !== $nextid ) {
            return $nextid;
        } else {
            return reset($ids);
        }
    }
}