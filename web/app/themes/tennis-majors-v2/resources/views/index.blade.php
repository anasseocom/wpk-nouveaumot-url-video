@extends('layouts.app')

@section('content')
<div>
    <div class="max-w-screen-lg m-auto">
        <h2 class="text-3xl  md:text-5xl uppercase text-black text-center my-10 md:my-20">{{ __('Tennis', 'sage') }} <span class="font-bold">{{ __('News', 'sage') }}</span></h2>
    </div>
    <div class="max-w-screen-sm m-auto">
        <div class="grid gap-x-8 gap-y-16 my-10 md:my-20 mx-4">
        $count = 0;
        @posts
        $count++;
        
            @if(has_post_thumbnail())
                @include('partials.common.preview-default')
            @else
                @include('partials.common.preview-flash')
            @endif
            @istrue($count == 1)
  Hello World
@endistrue
        @endposts
        <div class="mt-12 mb-6">
            <?php pagination(); ?>
        </div>
        </div>
    </div>
</div>
@endsection
