@extends('layouts.app')

@section('content')
    @php
    global $wp_query;
        $author = $wp_query->get_queried_object();
        $id = $author->ID;
        $author_is_major = get_field('user_is_major', 'user_'. $id);
    @endphp

    @if($author_is_major)
        @include('partials.author.major')
    @else
        @include('partials.author.default')
    @endif
@endsection
