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
</div>
  @while(have_posts()) @php the_post() @endphp
    @if($i < 5)
      hihi
    @endif
    @php
        $i++;
    @endphp
  @endwhile

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
