<?php

function get_lives() {
  $date_formt = 'Y-m-d';
  $selected_date = isset($_GET['date']) ? $_GET['date'] : date($date_formt);
  $tour_type  = !empty($_GET['tour_type'])?$_GET['tour_type'] : '';
  $cache_key = "lives_page_".$tour_type.'_'.$selected_date;
  $group = 'lives';
  $duration = 3600;
  echo_from_cache($cache_key,$group,$duration,function()use ($selected_date,$tour_type){
      if (class_exists( 'Live_Model' )){
          $args = array(
              'post_type'   => 'live',
              'meta_key'     => 'has_live_id',
              'suppress_filters' => false,
          );
          $posts = get_posts($args) ;
      }
    include (get_stylesheet_directory().'/include/templates/lives.php');
  });    
}