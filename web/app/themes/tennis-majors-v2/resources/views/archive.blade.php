@extends('layouts.app')

@section('content')
    @php
        $i = 0;
        $j = 0;
        $term = get_queried_object();
        $background = get_field('category_background', $term);
    @endphp

    <div id="archive" class="relative">
        @if($background)
            <div class="background">
                <img src="{{ $background['url'] }}">
            </div>
            <div class="max-w-screen-lg m-auto relative">
                <h2 class="text-5xl uppercase text-white text-center py-20"><span class="font-bold">{{ single_cat_title() }}</span></h2>
            </div>
        @else
            <div class="max-w-screen-lg m-auto">
                <h2 class="text-5xl uppercase text-black text-center my-20 pb-2"><span class="font-bold">{{ single_cat_title() }}</span></h2>
            </div>
        @endif
        <div id="archive-slider" class="relative">
            <div id="archive-slider-arrow" class="absolute z-10 shadow-lg rounded-full cursor-pointer transform -translate-y-1/2 -translate-x-1/2 top-1/2">
                @include('partials.images.slider-arrow-right')
            </div>
            <div id="archive-slider-slider" class="slider-preview-mode">
                @posts
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

    <div class="max-w-screen-sm m-auto">
        <div class="grid gap-x-8 gap-y-16 my-20 mx-4">
        @posts
            @if($j > 5)
                @if(has_post_thumbnail())
                    @include('partials.common.preview-default')
                @else
                    @include('partials.common.preview-flash')
                @endif
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
@endsection
