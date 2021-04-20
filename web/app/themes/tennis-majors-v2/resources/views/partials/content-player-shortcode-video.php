<?php
$pattern = get_shortcode_regex(['mot_video']);
$shortcode = '';
if (preg_match("#".$pattern."#s", $post->post_content, $matches)) {
  $shortcode = $matches[0];
}
?>
<div>
<?php if(!empty($shortcode)){
    echo do_shortcode( $shortcode );
}else{?>
    LE FIELD
<?php } ?>
</div>

// Pour le contenu du video post, dans le cas où il n'y a pas le field, il faut afficher ça : 
<?php 
$content = strip_shortcodes(get_the_content());
echo $content;
?>