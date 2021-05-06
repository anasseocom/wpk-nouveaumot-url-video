<?php

function get_previous_video($post) {
    $previous_video = get_field('video_previous');

    if(!$previous_video) {
        $prev_post = get_adjacent_post( true, '', true, 'shows' );
        $previous_video = $prev_post;
    }

    return $previous_video;
}

function get_next_video($post) {
    $next_video = get_field('video_next');

    if(!$next_video) {
        $post_next = get_adjacent_post( true, '', false, 'shows' );
        $next_video = $post_next;
    }

    return $next_video;
}

