@extends('layouts.app')

@section('content')
@php
    $i = 0;
    $j = 0;
@endphp

<div>
    <div class="max-w-screen-lg m-auto">
        <h2 class="text-5xl uppercase text-black text-center my-20 pb-2">Our <span class="font-bold">{{ single_cat_title() }}</span></h2>
    </div>
    <div id="archive-slider" class="relative">
        <div id="archive-slider-arrow" class="absolute z-10 shadow-lg rounded-full cursor-pointer transform -translate-y-1/2 -translate-x-1/2 top-1/2">
            @include('partials.images.slider-arrow-right')
        </div>
        <div id="archive-slider-slider" class="slider-preview-mode">
            @while(have_posts()) @php the_post() @endphp
                @if($i < 5)
                    @include('partials.common.preview-slider')
                @endif
                @php
                    $i++;
                @endphp
            @endwhile
        </div>
    </div>
</div>

  @while(have_posts()) @php the_post() @endphp
    @if($j > 5)
      coucou
    @endif
    @php
        $j++;
    @endphp
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
