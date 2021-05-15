<?php

function get_time_since_posted() {
    
    $my_current_lang = apply_filters( 'wpml_current_language', NULL );
    if ($my_current_lang =='fr')   {
    $time_since_posted = 'il y a ' . human_time_diff( get_the_date('U'), current_time( 'timestamp' ) ) ;
    }
    elseif ($my_current_lang =='en') {
    $time_since_posted = human_time_diff( get_the_date('U'), current_time( 'timestamp' ) ) . ' ago';
    }

return $time_since_posted;

}
