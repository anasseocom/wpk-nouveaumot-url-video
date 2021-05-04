{{--
  Template Name: Shows
--}}

@extends('layouts.app')

@section('content')
@php
    global $post;
    $videos_on_top = get_field('videos_on_top');

    $shows = get_terms( array(
        'taxonomy' => 'shows',
        'hide_empty' => false,
    ) );
@endphp
<div class="bg-black">
    <div class="max-w-screen-lg m-auto">
        <h2 class="text-5xl uppercase text-white text-center pt-20 pb-10">Our <span class="font-bold">{{ __('Shows', 'sage')</span></h2>
    </div>
    <div>
        <div id="shows-slider">
            @foreach( $videos_on_top as $post)
                @php
                    setup_postdata($post);
                @endphp
                <a href="{{ the_permalink() }}" class="rounded-lg bg-gray-100 h-96 relative overflow-hidden max-w-full text-white">
                    <div class="max-w-screen-xl">
                        {{ the_post_thumbnail('full', array('class' => 'absolute w-full h-full object-cover top-0 left-0')) }}
                        <div class="absolute w-full h-full object-cover top-0 left-0 bg-gradient-to-t from-black to-transparent opacity-80"></div>
                        <div class="w-screen"></div>
                        <div class="absolute w-4/5 z-10 top-1/2  transform -translate-y-1/2 left-10-100">
                            <div class="grid grid-cols-6 gap-12">
                                <div class="col-span-5 flex items-end">
                                    <div class="content">
                                        <span class="bg-white px-4 py-2 rounded-full text-black uppercase font-bold text-xs">{{ __('must see', 'sage')</span>
                                        <div class="text-xs mt-8 mb-5">{{ the_time('j F Y') }}</div>
                                        <h1 class="font-bold uppercase text-3xl text-white">{{ the_title() }}</h1>
                                    </div>
                                </div>
                                <div class="col-span-1 flex items-end">
                                    <div class="w-26">
                                        @include('partials.images.play')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
            @php wp_reset_postdata() @endphp
        </div>
    </div>
    <div>
        <div class="max-w-screen-xl m-auto">
            <div class="grid grid-cols-4 gap-4 py-20">
                @foreach($shows as $show)
                    @php
                        $image = get_field('image', $show);
                    @endphp
                    <a href="{{ get_term_link($show) }}" class="preview preview--show">
                        <img src="<?php echo $image['url']; ?>" class="thumbnail">
                        <div class="gradient"></div>
                        <h4 class="title">{{ $show->name }}</h4>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

  {!! get_the_posts_navigation() !!}
@endsection
