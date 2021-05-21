<?php

function get_data_from_cache( $key , $group , $duration, $callback, $use_key_prefix = true ){
        if( $use_key_prefix ){
            $key = get_cache_key($key);
        }else{
            $key = get_current_blog_id().'_'.$key;
        }
    $cached_data = wp_cache_get($key , $group);
    if ( !empty($cached_data) && !isset($_GET['disable_cache'])) {
        if(isset($_GET['debug_objet_cache'])){
            echo "from_cache  key = $key , goup $group , duration $duration  " ;
        }
        return $cached_data;
    }  else {    
        $data = $callback();
        if(isset($_GET['debug_objet_cache'])){
            echo "no_from_cache  key = $key , goup $group , duration $duration  " ;
        }
        wp_cache_set($key, $data, $group, $duration );
        return $data;
    }
}