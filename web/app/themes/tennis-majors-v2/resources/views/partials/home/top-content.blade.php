@php 
    global $post;
    $posts_on_top = get_field('posts_on_top', 'option');
@endphp

@if($posts_on_top)
    <div id="slider-cards" class="max-w-screen-xl ml-4 xl:m-auto py-5 lg:py-8 relative">
        <div class="-mx-2">
            <div id="slider-cards--slider" class="slider-preview-mode  flex overflow-x-auto scrolling-touch snap-type-mandatory">
                @foreach( $posts_on_top as $post)
                    @php
                        setup_postdata($post);
                    @endphp
                    <div class="snap-align-start">
                        @include('partials.common.preview-slider')
                    </div>
                @endforeach
                @php wp_reset_postdata() @endphp
            </div>
        </div>
    </div>
@endif