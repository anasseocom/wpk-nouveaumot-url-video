<?php
$pattern = get_shortcode_regex(['mot_video']);
$shortcode = '';
if (preg_match("#".$pattern."#s", $post->post_content, $matches)) {
  $shortcode = $matches[0];
}
?>
<div class="video px-4 mt-12">
    <div class="article-container max-w-screen-xl m-auto">
      <article @php post_class() @endphp >
        <div class="max-w-screen-lg m-auto">
            <h1 class="font-bold text-5xl text-center">
            @title
            </h1>
            <div class="font-bold mt-8 mb-4 text-lg max-w-screen-md m-auto text-center">
            @excerpt
            </div>
            <div>
<?php if(!empty($shortcode)){
    echo do_shortcode( $shortcode );
}else{?>
    LE FIELD
<?php } ?>
</div>
        </div>
        <div class="max-w-screen-sm m-auto">
            @include('partials.single.common.author-date')
        </div>
        <div class="content">
        <?php 
$content = strip_shortcodes(get_the_content());
echo $content;
?>
        </div>
        <div class="max-w-screen-sm m-auto">
            @include('partials.single.common.share')
        </div>
      </article>
    </div>
</div>
@include('partials.single.common.more')
@include('partials.comments')