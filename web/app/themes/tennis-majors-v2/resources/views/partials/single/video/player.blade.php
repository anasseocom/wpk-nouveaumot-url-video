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
        <iframe class="w-full h-full absolute left-0 top-0 overflow-hidden" frameborder="0" type="text/html" src="@field('video_url')?autoplay=1" width="100%" height="100%" allowfullscreen allow="autoplay"> </iframe>
        </div>
    </div>
    @endif
@endif