<?php

add_action('show_diapo','show_diapo_single');

$pattern = get_shortcode_regex( array('gallery') );
define('HAS_GALLERY_REGEXP', "/$pattern/" );
/**
 * get post last gallery attachment
 * @param  Object $post
 * @return $gallery_last_image
 */
function get_post_last_attachment($post){
	$gallery_last_image = null;
	if (preg_match(HAS_GALLERY_REGEXP, $post->post_content, $matches)) {

		$ids = explode(',' , $matches[3]);
		$count = count($ids);
		$last_id = end( $ids );

		$gallery_last_image = get_post($last_id);
	}
	$image = array(
	  'link'  => $gallery_last_image,
    'count' => $count,
  );
	return $image;
}



/**
 * get_attachements_post_array
 * @param  list $ids
 * @return current_gallery_images
 */
function get_attachements_post_array($ids){
	// we need to keep the order like in post__in!
	$args = array('post_type' => 'attachment', 'post__in' => $ids, 'orderby' => 'post__in' , 'posts_per_page' => -1);
	return get_posts($args);
}

add_filter('post_gallery', 'customize_post_gallery', 10, 2);

if(!function_exists('customize_post_gallery')) :
/**
 * customize_post_gallery
 * @param  null
 * @param  gallery's attrs
 * @return post_gallery
 */
function customize_post_gallery($null, $attr = array()) {
    // nouveau style
	global $current_gallery_images ,$post;

	// explode ids
	$id_thumbs = isset($attr['ids']) ? explode(",", $attr['ids']) : array();
	if( !$id_thumbs ) return '';
	
	// get post attachments
	$current_gallery_images = get_attachements_post_array( $id_thumbs );

	wp_enqueue_script( 'post-gallery', get_template_directory_uri() . '/resources/scripts/diapo.js', array(), true, true );
	// wp_enqueue_style('post-gallery-css', get_template_directory_uri() . '/assets/css/post-gallery.css', array());


	$attachments = array();
	$size_image = 'mini-sites-xlarge-size';
	$size_image = apply_filters('diapo_image_size',$size_image);

	foreach ($id_thumbs as $id_thumb) {
		$attachment = array(
			'id' => $id_thumb,
			'thumbnail' => wp_get_attachment_image_src($id_thumb, 'thumbnail'),
			'medium' => wp_get_attachment_image_src($id_thumb, 'medium'),
			'full' => wp_get_attachment_image_src($id_thumb, $size_image)
		);
		$attachment['data']['src'] = $attachment['full'][0];
		// make the image on the diapo clickable.
		$custom_url = get_post_meta( $id_thumb, 'custom_url', true );
		if ( ! empty( $custom_url ) ) {
			$attachment[ 'data' ][ 'custom_url' ] = $custom_url;
		}
		array_push( $attachments, $attachment );
	}

	$attachments_count = count($attachments);

    $category = get_category_by_slug('diaporama');
    $id_category = $category->term_id;
    $all_diaporama = get_category_link($id_category);

	ob_start();
	include (get_template_directory() . "/resources/views/partials/diapo.blade.php");
	$post_gallery = ob_get_contents();
	ob_end_clean();
	$post_gallery = apply_filters('after_gallery', $post_gallery);
	return $post_gallery;
}
endif;



function has_gallery(){
	global $post;

	if ( has_shortcode( $post->post_content, 'gallery') ) {
	
		return  true;
	}
	return false;
}



function show_diapo_single(){
	global $post;
	if (is_single() && has_gallery()) {
	  $regex = get_shortcode_regex(['gallery']);
	  $regex = '/'. $regex .'/';
	  preg_match($regex, get_the_content(),$matches);
	  if (!empty($matches)) {
		  $shortcode = $matches[0];
		  echo do_shortcode($shortcode);
	  }
	}
  }
  function add_hasdiapo_tag_to_post($post_id, $post){

    if ((defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) OR  wp_is_post_revision( $post_id ) ){
      return;
    }
      
    $tags = array();
    $already_has_diapo = false;
    
    $has_diapo = apply_filters('custom_tag', 'has_diapo');
  
    $posttags = get_the_tags($post_id);
  
    if($posttags){
      foreach ($posttags as $posttag) {
        $tags[$posttag->slug] = $posttag->slug;
      }
    }
    
    if(isset($tags[$has_diapo])){
      $already_has_diapo = true;
    }
  
    if(preg_match ('/\[gallery\s.*\]/' , $post->post_content , $matches )){
      if(!$already_has_diapo)
        wp_set_post_tags( $post_id, $has_diapo, true );
    }else{
      if($already_has_diapo){
        unset($tags[$has_diapo]);
        wp_set_post_tags( $post_id, $tags );
      }
    }
  }
  function save_post_diaporama($post_id, $post) {
  
    if(preg_match ('/\[gallery.*ids=.(.*).\]/' , $post->post_content , $matches )){
  
      
      if ((defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) OR  wp_is_post_revision( $post_id )  OR  defined('DOING_SYNC_CONTENT') )   {
        return $post_id; 
      }
  
      $slug = apply_filters( 'category_diapo_slug' ,'diaporama');
  
      if(isset($slug) && $slug ){  
        $idObj = rw_get_category_by_slug($slug);
        if($idObj->term_id){ 
          $id_cat_diapo = $idObj->term_id;
        }else{ 
          $diapo_cat = wp_insert_term(
            'Diaporama '.ucfirst($section_),
            'category',
            array(
              'slug' => $slug,
              )
            );	
          $id_cat_diapo = $diapo_cat['term_id'];
        }
        $new_array_category=array();
        $post_category = get_the_category($post_id) ;
        if(apply_filters('do_set_category_diapo', true, $post_category)){
          foreach ($post_category as $c) {
            $new_array_category[]=$c->term_id;
          }
          if(!in_array($id_cat_diapo, $new_array_category)){
            $new_array_category[]=$id_cat_diapo;
          }
          wp_set_post_categories( $post_id, $new_array_category );
          
        }
      }
      
    }
  }