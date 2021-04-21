{{--
  Template Name: News
--}}

@extends('layouts.app')

@section('content')
@php
    $features = new WP_Query(
        array(
            'posts_per_page' => -1,
        )
    );
@endphp
<div>
    <div class="max-w-screen-lg m-auto">
        <h2 class="text-5xl uppercase text-black text-center my-20 pb-2">Tennis <span class="font-bold">News</span></h2>
    </div>
    <div class="max-w-screen-sm m-auto">
        <div class="grid gap-x-8 gap-y-16 my-20 mx-4">
        @posts($features)
            @if(has_post_thumbnail())
                @include('partials.common.preview-default')
            @else
                @include('partials.common.preview-flash')
            @endif
        @endposts
        </div>
    </div>
</div>

  {!! get_the_posts_navigation() !!}
@endsection
