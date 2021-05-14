@extends('layouts.app')

@section('content')

@php
    $term = get_queried_object();
    $image = get_field('image_with_title', $term);

    $args_posts_paged = array(
        'post_type' => 'videos',
        'tax_query' => array(
                array(
                    'taxonomy' => 'shows',
                    'field'    => 'slug',
                    'terms'    => $term->slug,
                ),
            ),
        'posts_per_page' => 12,
        'paged'          => get_query_var( 'paged' ),
        'facetwp' => true,
        );

    $args_all_posts = array(
        'post_type' => 'videos',
        'tax_query' => array(
                array(
                    'taxonomy' => 'shows',
                    'field'    => 'slug',
                    'terms'    => $term->slug,
                ),
            ),
        'posts_per_page' => -1,
        );
    $posts_paged = new WP_Query( $args_posts_paged );
    $all_posts = new WP_Query( $args_all_posts );
    $count_episodes = $all_posts->post_count;
    $my_current_lang = apply_filters( 'wpml_current_language', NULL );

@endphp

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
                <div class="col-span-6 md:col-span-3 hidden md:block">
                    <img src="{{ $image['url'] }}">
                </div>
            </div>
        </div>
        <div class="max-w-screen-lg m-auto">
            <div class="grid grid-cols-12 md:gap-x-8 py-12 mx-4">
                <div class="col-span-12 md:col-span-9">
                    <div class="flex justify-between items-center mb-4">
                        <div class="uppercase text-xl font-bold">
                            The
                            @if($count_episodes == 1)
                            {{ __('episode', 'sage') }}
                            @else
                            {{ __('episodes', 'sage') }}
                            @endif
                        </div>
                        <?php echo do_shortcode('[facetwp facet="video_types"]') ?>
                    </div>
                    <div>
                    <div class="list-show col-span-12 grid grid-cols-1 md:grid-cols-2 gap-3">
                        @posts($posts_paged)
                            @include('partials.common.preview-video')
                        @endposts
                    </div>
                    <?php pagination(); ?>
                    <?php wp_reset_query(); ?>
                </div>
                <div class="col-span-3">
                    
                </div>
            </div>
        </div>
    </div>

@endsection
