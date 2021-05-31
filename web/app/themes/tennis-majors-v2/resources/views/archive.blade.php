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
            <div class="background-container">
                <div class="background">
                    <img src="{{ $background['url'] }}">
                </div>
            </div>
            <div class="max-w-screen-lg m-auto relative">
                <h2 class="text-4xl md:text-5xl uppercase text-white text-center pt-12 pb-8 md:py-20"><span class="font-bold">{{ single_cat_title() }}</span></h2>
            </div>
        @else
            <div class="max-w-screen-lg m-auto">
                <h2 class="text-5xl uppercase text-black text-center my-20 pb-2"><span class="font-bold">{{ single_cat_title() }}</span></h2>
            </div>
        @endif
        <div id="slider-cards" class="max-w-screen-xl ml-4 xl:m-auto py-5 lg:py-8 relative">
            <div class="-mx-2">
                <div id="slider-cards--slider" class="slider-preview-mode flex overflow-x-auto scrolling-touch snap-type-mandatory scrollbar-hidden">
                    @posts
                        @if($i < 5)
                            <div class="snap-align-start  transform origin-center scale-100 transition-transform duration-500 card-{{$i}}" id="card-{{$i}}">
                                @include('partials.common.preview-slider')
                            </div>
                        @endif
                        @php
                            $i++;
                        @endphp
                    @endposts
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-screen-sm m-auto">
        <div class="grid gap-x-8 gap-y-16 my-10 md:my-20 mx-4">
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
        <div class="mt-12 mb-6">
            <?php pagination(); ?>
        </div>
    <div>
@endsection
