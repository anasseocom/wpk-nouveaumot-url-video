@php 
    global $post;
    $posts_on_top = get_field('posts_on_top');
@endphp
    <div id="top-content" class="py-8 pl-4 relative">
        <div id="top-content-arrow" class="absolute z-10 shadow-lg rounded-full cursor-pointer transform -translate-y-1/2 -translate-x-1/2 top-1/2">
            @include('partials.images.slider-arrow-right')
        </div>
        <div id="top-content-slider" class="slider-preview-mode">
            @foreach( $posts_on_top as $post)
                @php
                    setup_postdata($post);
                @endphp
                @include('partials.common.preview-slider')
            @endforeach
            @php wp_reset_postdata() @endphp
        </div>
    </div>