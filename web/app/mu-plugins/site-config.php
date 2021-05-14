<?php

global $site_config,$exclude_tournament_shortcode,$mot_tournaments_types,$mot_filtter_tour,$site_config_js;
$exclude_tournament_shortcode=[];


$link = get_bloginfo('url');
$description = get_bloginfo('description');
$site_meta_data = array(
  'title' => 'Tennis Majors',
  'link' => $link,
  'category' => 'Tennis',
  'description' => $description,
  'webMaster' => 'amrani@webpick.info',
  'image' => array(
    'title' => 'Tennis Majors',
    'url' => 'https://sf.tennismajors.com/wp-content/uploads/2020/04/Noir.png',
    'link' => $link,
    'description' => $description,
    'width' => '621',
    'height' => '483',
  ),
);


$site_config = array( 
    'google_analytics' =>[
      "global"=>"UA-156196903-1",
      "en"=>"UA-156196903-2",
      "fr"=>"UA-156196903-3",
    ],
    'logo_ms_amp' => array(
      'url' => get_stylesheet_directory_uri() . '/assets/images/tennis-majors.png',
      'width' => '46',
      'height' => '35',
    ),
    'facebook_app_id_fr' => '2517315035247071',
    'facebook_app_id_en' => '584738298835761',
    'id_google_analytic_fr' => 'UA-156196903-3',
    'id_google_analytic_en' => 'UA-156196903-2',
    'access_to_site_meta_data_route' => true,
    'site_meta_data' => $site_meta_data,
    'truepush_ids'=>[
      'en'=>'5ecd1604a214335b223fd1a4',
      'fr'=>'5ecd14f8763e39c6c632292b'
    ],
    'add_syndication_additional_fields_to_api' => true,
    'facebook_url'=>'https://www.facebook.com/TennisMajors', 
    'twitter_url'=>'https://twitter.com/Tennis_Majors', 
    'instagram_url'=>'https://www.instagram.com/tennismajors/',

    'fr_facebook_url'=>'https://www.facebook.com/TennisMajorsFR', 
    'fr_twitter_url'=>'https://twitter.com/tennismajorsfr', 
    'fr_instagram_url'=>'https://www.instagram.com/tennis_majorsfr/',

    'dailymotion_url'=>'https://www.dailymotion.com/Tennismajors',
  );
