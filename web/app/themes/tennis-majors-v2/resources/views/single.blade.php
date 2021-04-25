@extends('layouts.app')

@section('content')
@posts
    @php
      $is_feature = has_term('feature', 'editorial-types');
    @endphp

    @if($is_feature)
      @include('partials.single.feature')
    @else
      @include('partials.single.default')
    @endif
    @endposts
@endsection
