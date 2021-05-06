@php 
    global $post;
    $posts_on_top = get_field('posts_on_top', 'option');
@endphp

@if($posts_on_top)
    <div id="slider-cards" class="max-w-screen-xl ml-4 xl:m-auto py-5 lg:py-8 relative">
        <div id="slider-cards--arrow-left" class="absolute z-10 shadow-lg rounded-full cursor-pointer transform -translate-y-1/2 -translate-x-1/2 top-1/2 left-20">
            @include('partials.images.slider-arrow-left')
        </div>
        <div id="slider-cards--arrow-right" class="absolute z-10 shadow-lg rounded-full cursor-pointer transform -translate-y-1/2 -translate-x-1/2 top-1/2 right-0">
            @include('partials.images.slider-arrow-right')
        </div>
        <div id="slider-cards--slider" class="slider-preview-mode">
            @foreach( $posts_on_top as $post)
                @php
                    setup_postdata($post);
                @endphp
                @include('partials.common.preview-slider')
            @endforeach
            @php wp_reset_postdata() @endphp
        </div>
    </div>
</div>
@endif