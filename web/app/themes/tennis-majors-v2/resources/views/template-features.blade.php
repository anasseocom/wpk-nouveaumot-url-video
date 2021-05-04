{{--
  Template Name: Features
--}}

@extends('layouts.app')

@section('content')
@php
    $i = 0;
    $j = 0;

    $features = query_posts(
        array(
            'posts_per_page' => 9,
            'tax_query' => array(
                array(
                    'taxonomy' => 'editorial-types',
                    'field' => 'slug',
                    'terms' => 'feature',
                )
            )
        )
    );
@endphp
<div>
    <div class="max-w-screen-lg m-auto">
        <h2 class="text-5xl uppercase text-black text-center my-10 lg:my-20">('Our', 'sage') <span class="font-bold">('Features', 'sage')</span></h2>
    </div>
    <div id="slider-cards" class="max-w-screen-xl ml-4 xl:m-auto py-5 lg:py-8 relative">
        <div id="slider-cards--arrow" class="absolute z-10 shadow-lg rounded-full cursor-pointer transform -translate-y-1/2 -translate-x-1/2 top-1/2 right-0">
            @include('partials.images.slider-arrow-right')
        </div>
        <div id="slider-cards--slider" class="slider-preview-mode">
            @posts($features)
                @if($i < 5)
                    @include('partials.common.preview-slider')
                @endif
                @php
                    $i++;
                @endphp
            @endposts
        </div>
    </div>
    <div class="mx-4">
        <div class="max-w-screen-xl m-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-16 my-10 lg:my-20">
            @posts($features)
                @if($j > 5)
                    @include('partials.common.preview-basic')
                @endif
                @php
                    $j++;
                @endphp
    
            @endposts
            </div>
        </div>
        <div class="max-w-screen-xl m-auto">
            <?php pagination(); ?>
        <div>
    </div>
</div>
@endsection
