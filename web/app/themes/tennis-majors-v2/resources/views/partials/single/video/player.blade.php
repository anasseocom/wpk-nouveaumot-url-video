@if(!empty($shortcode)) 
    <div class="max-w-screen-lg m-auto">
        <div id='player' class="relative h-0 overflow-hidden pb-16/9">
        @php echo do_shortcode( $shortcode ); @endphp
        </div>
    </div>
@else
    @if(get_field('video_url'))
    <div class="max-w-screen-lg m-auto">
        <div id='player' class="relative h-0 overflow-hidden pb-16/9">
        @php
        // Load value.
$iframe = get_field('video_url');

// Use preg_match to find iframe src.
preg_match('/src="(.+?)"/', $iframe, $matches);
$src = $matches[1];







$check_url=get_post_meta( $post_id,'video_perform_url');

if(! isset($check_url[0])){ 
    add_post_meta($post_id,'video_perform_url',$src);
}










// Add extra parameters to src and replcae HTML.
$params = array(
    'controls'  => 1,
    'hd'        => 1,
    'autohide'  => 1,
    'autoplay' =>1,
);
$new_src = add_query_arg($params, $src);
$iframe = str_replace($src, $new_src, $iframe);

// Add extra attributes to iframe HTML.
$attributes = 'class="w-full h-full absolute left-0 top-0 overflow-hidden" frameborder="0" ';
$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

// Display customized HTML.
echo $iframe;
@endphp
        </div>
    </div>
    @endif
@endif