@extends('layouts.app')

@section('content')
<div>
    <div class="max-w-screen-lg m-auto">
        <h2 class="text-5xl uppercase text-black text-center my-20 pb-2">Tennis <span class="font-bold">News</span></h2>
    </div>
    <div class="max-w-screen-sm m-auto">
        <div class="grid gap-x-8 gap-y-16 my-20 mx-4">
        @posts
            @if(has_post_thumbnail())
                @include('partials.common.preview-default')
            @else
                @include('partials.common.preview-flash')
            @endif
        @endposts
        <?php pagination(); ?>
        </div>
    </div>
</div>
@endsection
