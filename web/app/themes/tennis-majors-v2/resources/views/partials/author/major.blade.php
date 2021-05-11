@php
    global $wp_query;
    $author = $wp_query->get_queried_object();
    $id = $author->ID;
    $author_is_major = get_field('user_is_major', 'user_'. $id);
    $first_name = get_user_meta( $id, 'first_name', true );
    $last_name = get_user_meta( $id, 'last_name', true );
    $description = get_user_meta($id, 'description', true);
    $twitter = get_field('user_twitter', 'user_'. $id);
    $instagram = get_field('user_instagram', 'user_'. $id);
    $image = get_field('user_image', 'user_'. $id);
    $my_current_lang = apply_filters( 'wpml_current_language', NULL );
@endphp
<div class="bg-black text-white px-4">
    <div class="max-w-screen-xl m-auto pt-14 md:pt-20 relative">
        <div class="grid grid-cols-12 gap-x-8">
            <div class="col-span-12 md:col-span-6 flex-col flex items-center md:items-end relative">
                <div class="absolute left-0 -top-10">
                @if($my_current_lang =='fr')
                <a href="{{ get_permalink( get_page_by_path( 'dream-team' ) )}}" class="uppercase text-xs link--arrow link--arrow-white link--arrow-left">{{ __('Back to the team', 'sage') }}</a>
                        @endif
                        @if($my_current_lang =='en')
                        <a href="{{ get_permalink( get_page_by_path( 'major-team' ) )}}" class="uppercase text-xs link--arrow link--arrow-white link--arrow-left">{{ __('Back to the team', 'sage') }}</a>
                        @endif
                </div>
                <img src="{{ $image['url'] }}" class="w-80">
                <div class="h-44 w-full absolute bottom-0 bg-gradient-to-t from-black to-transparent opacity-100"></div>
            </div>
            <div class="col-span-12 -mt-32 md:mt-0 md:col-span-6 relative">
                <div class="flex -mx-1">
                    @if ($twitter)
                        <div class="mx-0.5">
                            <a href="{{ $twitter }}" target="_blank">
                                @include('partials.images.socials.twitter')
                            </a>
                        </div>
                    @endif
                    @if ($instagram)
                        <div class="mx-0.5">
                            <a href="{{ $instagram }}" target="_blank">
                                @include('partials.images.socials.instagram')
                            </a>
                        </div>
                    @endif
                </div>
                <div>
                    <h1 class="uppercase text-4xl lg:text-6xl">
                        <span class="block">{{ $first_name }}</span>
                        <span class="font-bold block">{{ $last_name }}</span>
                    </h1>
                </div>
                <div class="mt-7">
                    {{ $description }} 
                </div>
            </div>
        </div>
        <div>
            @php
                $videos = get_posts( array(
                    'connected_type' => 'multiple_authors_videos',
                    'from' => 'videos',
                    'connected_items' => $wp_query->get_queried_object(),
                    'connected_meta' => array(
                        'role' => array( 'Guest', 'Host')
                    ),
                    'nopaging' => true
                    ) );


            @endphp
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 py-14">
                @foreach( $videos as $video)
                    @php
                        global $post;
                        $post = $video;
                    @endphp
                    <a href="{{ the_permalink() }}" class="preview preview--video preview--video-major">
                        {{ the_post_thumbnail('16-9_xs', array('class' => 'thumbnail')) }}
                        <div class="gradient"></div>
                        <div class="h-full">
                            <div class="w-screen h-full"></div>
                            <div class="p-4 h-full top-0 left-0">
                                <div class="absolute bottom-4 right-4 w-14 sm:w-10 sm:relative sm:right-auto sm:bottom-auto sm:mt-2 sm:mb-2">
                                    @include('partials.images.play')
                                </div>
                                <h4 class="title">{{ the_title()}}</h4>
                                <div class="absolute top-4 text-xs sm:relative sm:top-auto sm:mt-2">@include('partials.single.common.time-bilingue')</div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

</div>