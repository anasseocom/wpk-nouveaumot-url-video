{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.home.top-content')
    @include('partials.single.common.pub')
    @include('partials.home.shows')
    @include('partials.home.stories')
    @include('partials.home.partners')
    @include('partials.home.news')
    @include('partials.home.major-team')
    @include('partials.home.newsletter')
  @endwhile
@endsection