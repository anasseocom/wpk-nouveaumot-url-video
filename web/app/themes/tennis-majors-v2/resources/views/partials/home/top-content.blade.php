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
                    <div class="rounded-md bg-gray-100 p-5 max-w-cardfirst h-screen max-h-card relative overflow-hidden text-white">
                        @php
                            setup_postdata($post);
                            $author_avatar_url = get_avatar_url(get_the_author_meta('email'));
                            $author_name = get_the_author_meta( 'first_name' )." ".get_the_author_meta( 'last_name' );
                        @endphp
                        
                        <img src="{{ the_post_thumbnail_url() }}" class="absolute w-full h-full object-cover top-0 left-0">
                        <div class="absolute w-full h-full object-cover top-0 left-0 bg-gradient-to-t from-black to-transparent opacity-80"></div>
                        <div class="z-10 relative">
                            <div class="text-xs mb-5">{{ the_time('j F Y') }}</div>
                            <h1 class="uppercase font-bold text-2xl mb-5">{{ the_title() }}</h1>
                            <div class="mb-5">{{ get_the_excerpt() }}</div>
                            <div class="flex flex-row items-center">
                                <div>
                                    <img class="rounded-full w-6 flex" loading="lazy" src="{{ $author_avatar_url }}">
                                </div>
                                <div class="ml-2 uppercase text-xs">{{ $author_name }}</div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="rounded-md bg-gray-100 p-5 max-w-card h-screen max-h-card relative overflow-hidden text-white">
                        @php
                            setup_postdata($post);
                            $author_avatar_url = get_avatar_url(get_the_author_meta('email'));
                            $author_name = get_the_author_meta( 'first_name' )." ".get_the_author_meta( 'last_name' );
                        @endphp
                    
                        <img src="{{ the_post_thumbnail_url() }}" class="absolute w-full h-full object-cover top-0 left-0">
                        <div class="absolute w-full h-full object-cover top-0 left-0 bg-gradient-to-t from-black to-transparent"></div>
                        <div class="z-10 relative flex flex-col">
                            <div class="text-xs mb-5">{{ the_time('j F Y') }}</div>
                            <h1 class="uppercase font-bold text-lg mb-5">{{ the_title() }}</h1>
                            <div class="mb-5">{{ get_the_excerpt() }}</div>
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
    </div>