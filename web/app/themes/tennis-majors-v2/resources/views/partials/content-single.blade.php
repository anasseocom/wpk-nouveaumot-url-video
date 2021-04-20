@php
    $is_feature = has_category('feature');
@endphp

@if($is_feature)
  @include('partials.single.feature')
@else
  @include('partials.single.default')
@endif