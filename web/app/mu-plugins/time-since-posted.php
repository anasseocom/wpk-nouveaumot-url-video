<?php

function get_time_since_posted() {

$time_since_posted = human_time_diff( get_the_date('U'), current_time( 'timestamp' ) ) . ' ago';

return $time_since_posted;

}
