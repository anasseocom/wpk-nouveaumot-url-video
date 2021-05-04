@extends('layouts.app')

@section('content')

@php
    $term = get_queried_object();
    $image = get_field('image', $term);

    $args = array(
    'post_type' => 'videos',
    'tax_query' => array(
            array(
                'taxonomy' => 'shows',
                'field'    => 'slug',
                'terms'    => $term->slug,
            ),
        ),
    );
    $query = new WP_Query( $args );
    $count_episodes = $query->post_count;

@endphp

    <div id="show" class="relative bg-black text-white">
        <div class="max-w-screen-lg m-auto">
            <div class="grid grid-cols-6 gap-x-8 py-12 mx-4">
                <div class="col-span-3">
                    <a class="uppercase text-xs link--arrow link--arrow-white link--arrow-left"  href="{{ get_permalink( get_page_by_path( 'shows' ) )}}">
                    {{ __('Back to all the shows', 'sage') }}
                    </a>
                    <div class="mt-4 mb-5">
                        <h1 class="uppercase text-5xl">{{ single_cat_title() }}</h1>
                    </div>
                    <div class="uppercase text-xl font-bold mb-5">
                        @if($count_episodes == 1)
                            {{ $count_episodes }} {{ __('episode', 'sage') }}
                        @else
                            {{ $count_episodes }} {{ __('episodes', 'sage') }}
                        @endif
                    </div>
                    <div>
                        @php echo term_description() @endphp
                    </div>
                </div>
                <div class="col-span-3">
                    <img src="{{ $image['url'] }}">
                </div>
            </div>
        </div>
        <div class="max-w-screen-lg m-auto">
            <div class="grid grid-cols-12 gap-x-8 py-12 mx-4">
                <div class="col-span-9">
                    <div class="flex justify-between items-center mb-4">
                        <div class="uppercase text-xl font-bold">
                            The
                            @if($count_episodes == 1)
                            {{ __('episode', 'sage') }}
                            @else
                            {{ __('episodes', 'sage') }}
                            @endif
                        </div>
                        @shortcode('[facetwp facet="video_types"]')
                    </div>
                    <div>
                    <div class="grid grid-cols-2 gap-3">
                        @posts
                            @include('partials.common.preview-video')
                        @endposts
                    </div>
                </div>
                <div class="col-span-3">
                    
                </div>
            </div>
        </div>
    </div>

@endsection
