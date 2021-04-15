@php 
    global $post;
    $posts_on_top = get_field('posts_on_top');
    $i = 0;
@endphp
    <div id="top-content" class="py-8 pl-4 relative">
        <div id="top-content-arrow" class="absolute z-10 shadow-lg rounded-full cursor-pointer transform -translate-y-1/2 -translate-x-1/2 top-1/2">
            @include('partials.images.slider-arrow-right')
        </div>
        <div id="top-content-slider">
        @foreach( $posts_on_top as $post)
            @if($i < 1)
                <div class="card card--first relative overflow-hidden text-white">
                    @php
                    setup_postdata($post);
                    @endphp
                    <img src="{{ the_post_thumbnail_url() }}" class="absolute w-full h-full object-cover top-0 left-0">
                    <div class="absolute w-full h-full object-cover top-0 left-0 bg-gradient-to-t from-gray-900 to-transparent"></div>
                    <div class="z-10 relative">
                        <div>{{ the_time('j F Y') }}</div>
                        <h1 class="uppercase font-bold text-2xl">{{ the_title() }}</h1>
                        <div>{{ get_the_excerpt() }}</div>
                    </div>
                </div>
            @else
            <div class="card relative overflow-hidden text-white">
                @php
                setup_postdata($post);
                $author_avatar_url = get_avatar_url(get_the_author_meta('email'));
                $author_name = get_the_author_meta( 'first_name' )." ".get_the_author_meta( 'last_name' );
                @endphp
                <img src="{{ the_post_thumbnail_url() }}" class="absolute w-full h-full object-cover top-0 left-0">
                <div class="absolute w-full h-full object-cover top-0 left-0 bg-gradient-to-t from-gray-900 to-transparent"></div>
                <div class="z-10 relative flex flex-col">
                    <div>{{ the_time('j F Y') }}</div>
                    <h1 class="uppercase font-bold  text-lg">{{ the_title() }}</h1>
                    <div>{{ get_the_excerpt() }}</div>
                    <div class="flex flex-row items-center">
                        <div>
                            <img class="rounded-full w-6 flex" loading="lazy" src="{{ $author_avatar_url }}">
                        </div>
                        <div class="ml-2 uppercase text-xs">{{ $author_name }}</div>
                    </div>
                </div>
            </div>
            @endif
            @php wp_reset_postdata() @endphp
            @php
                $i++ 
            @endphp
        @endforeach
    </div>