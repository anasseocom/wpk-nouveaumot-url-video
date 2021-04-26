@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @php
      $is_feature = has_term('feature', 'editorial-types');
    @endphp

    @if($is_feature)
      @include('partials.single.feature')
    @else
      @include('partials.single.default')
    @endif
  @endwhile
@endsection
