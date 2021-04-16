@php
    global $post;
    $video_on_top = get_field('video_on_top');
    $shows_on_top = get_field('shows_on_top');
@endphp

<div id="top-shows" class="mt-20 pb-16 relative text-white">
    <div class="max-w-screen-lg m-auto">
        <h2 class="text-4xl uppercase pl-4 text-black">Latests episodes</h2>
    </div>
    @if( $video_on_top )
        @php
            $post = $video_on_top;
            setup_postdata($post);
        @endphp
        <div class="px-4">
            <div class="max-w-screen-xl m-auto">
                <div class="grid grid-cols-5 gap-x-8 my-12">
                    <div class="col-span-3">
                        <div class="pb-16/9 bg-gray-100 relative">
                            <img src="{{ the_post_thumbnail_url() }}" class="absolute w-full h-full object-cover top-0 left-0">
                            <div class="absolute w-full h-full object-cover top-0 left-0 bg-gradient-to-t from-gray-900 to-transparent opacity-80"></div>
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-2/4 -translate-y-2/4 w-24">
                                @include('partials.images.play')
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 flex items-center">
                        <div>
                            <span class="bg-white px-4 py-2 rounded-full text-black uppercase font-bold text-xs">must see</span>
                            <h3 class="mt-8 mb-6">{{ the_time('j F Y') }}</h3>
                            <div class="uppercase font-bold text-4xl">{{ the_title() }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @php
        wp_reset_postdata()
    @endphp
    @endif
    @if( $shows_on_top )
        <div id="top-shows-list"  class="pl-2">
            @foreach( $shows_on_top as $show)
                <div class="mb-8">
                    <div>
                        <h3 class="ml-2 mb-2 uppercase inline-block mr-4">{{ $show->name }}</h3>
                        <a href="" class="inline-block text-xs">View All</a>
                    </div>
                    
                    @php
                        $posts_array = get_posts(
                            array(
                                'posts_per_page' => 8,
                                'post_type' => 'videos',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'shows',
                                        'field' => 'slug',
                                        'terms' => $show->slug,
                                    )
                                )
                            )
                        );
                    @endphp
                    <div class="top-shows-slider">
                        @foreach( $posts_array as $post)
                            <a href="{{ the_permalink() }}" class="rounded-md bg-gray-100 p-5 h-screen max-h-48 relative overflow-hidden text-white">
                                @php
                                    setup_postdata($post);
                                @endphp
                                <img src="{{ the_post_thumbnail_url() }}" class="absolute w-full h-full object-cover top-0 left-0">
                                <div class="absolute w-full h-full object-cover top-0 left-0 bg-gradient-to-t from-gray-900 to-transparent opacity-80"></div>
                                <div class="relative w-10 mt-6 mb-2">
                                    @include('partials.images.play')
                                </div>
                                <h4 class="relative uppercase font-bold text-sm">{{ the_title()}}</h4>
                                <div class="relative">{{ the_time('j F Y') }}</div>
                            </a>
                            
                        @endforeach
                        @php wp_reset_postdata() @endphp
                        <div>
                            <div class="flex flex-col items-center">
                                <div class="uppercase font-bold text-center pt-8">Wanna see more</br> {{ $show->name }} episodes ?</div>
                                <div class="uppercase text-sm mt-4 py-2 px-4 border-2 border-white">Discover all</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>