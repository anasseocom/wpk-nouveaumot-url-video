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
        <h2 class="text-5xl uppercase text-black text-center my-20 pb-2">Our <span class="font-bold">Features</span></h2>
    </div>
    <div class="ml-4">
        <div id="archive-slider" class="relative">
            <div id="archive-slider-arrow" class="absolute z-10 shadow-lg rounded-full cursor-pointer transform -translate-y-1/2 -translate-x-1/2 top-1/2">
                @include('partials.images.slider-arrow-right')
            </div>
            <div id="archive-slider-slider" class="slider-preview-mode">
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
    </div>
    <div class="max-w-screen-xl m-auto">
        <div class="grid grid-cols-3 gap-x-8 gap-y-16 my-20">
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
</div>
<div class="max-w-screen-xl m-auto">
    <?php pagination(); ?>
<div>
@endsection
