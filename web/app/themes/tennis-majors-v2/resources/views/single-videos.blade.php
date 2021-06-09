@extends('layouts.app')

@section('content')
  @posts
    @include('partials.single.video')
    @php(comments_template())
  @endposts
@endsection
