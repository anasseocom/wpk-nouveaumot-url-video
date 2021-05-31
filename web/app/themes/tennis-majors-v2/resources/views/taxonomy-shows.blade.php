@php
$my_current_lang = apply_filters( 'wpml_current_language', NULL );
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
$image = get_field('image_with_title', $term);

$args = array(
    'post_type' => 'videos',
    'posts_per_page' => -1,
    'tax_query' => array(
        'relation' => 'AND',
                array(
                    'taxonomy' => 'shows',
                    'field'    => 'slug',
                    'terms'    => $term->slug,
                ),
        array(
            'taxonomy' => 'video-types',
            'field'    => 'name',
            'terms'    => 'episodes',
        ),
    ),
);
$query_count_episodes = new WP_Query( $args );

// Get the count
$count_episodes = $query_count_episodes->post_count;
@endphp
@extends('layouts.app')
@section('content')
<div id="show" class="relative bg-black text-white">
        <div class="max-w-screen-lg m-auto">
            <div class="grid grid-cols-6 gap-x-8 py-8 sm:py-12 mx-4">
                <div class="col-span-6 md:col-span-3">
                    <div class="mb-4">
                        @if($my_current_lang =='fr')
                            <a class="uppercase text-xs link--arrow link--arrow-white link--arrow-left"  href="{{ get_permalink( get_page_by_path( 'nos-videos' ) )}}">
                        @endif
                        @if($my_current_lang =='en')
                            <a class="uppercase text-xs link--arrow link--arrow-white link--arrow-left"  href="{{ get_permalink( get_page_by_path( 'video-series' ) )}}">
                        @endif
                            {{ __('Back to all the video series', 'sage') }}
                        </a>
                    </div>
                    <div class="block md:hidden">
                        <img src="{{ $image['url'] }}">
                    </div>
                    <div class="mt-12 mb-5">
                        <h1 class="uppercase text-5xl">{{ $term->name }}</h1>
                    </div>
                    <div class="uppercase text-xl font-bold mb-5">
                        @if($count_episodes == 1)
                            {{ $count_episodes }} {{ __('episode', 'sage') }}
                        @else
                            {{ $count_episodes }} {{ __('episodes', 'sage') }}
                        @endif
                    </div>
                    <div class="mb-5">
                        <p class="text-lg">{{ $term->description }}</p>
                    </div>
                <div>
            </div>
        </div>
        <div class="col-span-6 md:col-span-3 hidden md:block">
            <img src="{{ $image['url'] }}">
        </div>
    </div>
</div>
<div class="max-w-screen-lg m-auto">
    <div class="grid grid-cols-12 md:gap-x-8 py-12 mx-4">
        <div class="col-span-12 md:col-span-9">
            <div class="md:flex md:justify-between md:items-center md:mb-4 pb-3 mb:pb-0">
                <div class="uppercase text-xl font-bold pb-3 mb:pb-0">
                    {{ __('The videos', 'sage') }}
                </div>
                @shortcode('[facetwp facet="video_types"]')
            </div>
            <div>
                <div class="list-show col-span-12 grid grid-cols-1 md:grid-cols-2 gap-3">
                    @posts()
                        @include('partials.common.preview-video')
                    @endposts
                </div>
                @shortcode('[facetwp facet="pagination"]') 
            </div>
            <div class="col-span-3"></div>
        </div>
    </div>
</div>

@endsection
