<?php

function count_post_of_taxonomy($taxonomy) {

    $args = array(
        'post_status' => 'published',
        'taxonomy-name' => $taxonomy,
        'numberposts' => -1,
            );

    $num = count(get_posts( $args ));
    
    return $num;
}
    