<?php
function mot_player($atts){
	global $post;
	if($post->post_type == 'videos' && is_single()){
	  $autoplay = 1;
	}
	else {
		$autoplay = 0;
	}
	$allow_autoplay = $autoplay ? 'autoplay' : '';
  
	if (strpos( $atts["url"], 'dailymotion' )){
	  $url = explode('/', $atts["url"]);
	  $url = "https://www.dailymotion.com/embed/video/".end($url);
	  $url = add_query_arg('autoplay',$autoplay,$url );
	  
	  $short_code =   '<iframe class="iframe-container inherited-shortcode" width="100%" controls allow="'.$allow_autoplay.'" loading="lazy" src="'.$url.'" style="width:100%;height:100%;position:absolute;left:0px;top:0px;overflow:hidden"></iframe>';
	}else{
	  $short_code =  '<video class="video-container inherited-shortcode-video" width="100%" controls  '.$allow_autoplay.' > <source data-src="'.$atts["url"].'" type="video/mp4"> </video>';
	}
	return $short_code;
  }
  add_shortcode( 'mot_video', __NAMESPACE__ . '\mot_player' );