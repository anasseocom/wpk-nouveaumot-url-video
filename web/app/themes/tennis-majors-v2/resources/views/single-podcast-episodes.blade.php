@extends('layouts.app')

@section('content')
  @posts
    @include('partials.single.podcast')
    @php(comments_template())  
  @endposts
@endsection