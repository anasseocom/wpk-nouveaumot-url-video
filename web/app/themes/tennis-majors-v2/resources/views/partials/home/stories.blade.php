@php 
    global $post;
    $stories_on_top = get_field('stories_on_top', 'option');
    $i = 0;
@endphp
@if( $stories_on_top )
    <div id="top-stories" class="pt-20 pb-8 pl-4 relative">
        <div class="max-w-screen-lg m-auto">
            <h2 class="text-4xl uppercase pl-4 text-black pb-8">10 Stories to read now</h2>
        </div>
        <div id="top-stories-slider">
            @foreach( $stories_on_top as $post)
                @if(get_post_type($post) == "curations")
                    <a href="{{ the_field('post_url')}}" target="_blank" class="max-w-stories">
                @else
                    <a href="{{ the_permalink( )}}" class="max-w-stories">
                @endif
                    <div class="rounded-md overflow-hidden relative pb-12/10 mb-6">
                    {{ the_post_thumbnail('5-6_sm', array('class' => 'absolute w-full h-full object-cover top-0 left-0')) }}
                        <div class="absolute bg-black  text-white w-24 h-24 bottom-0 left-0 leading-number-stories text-center text-5xl font-bold">
                            {{ $i + 1 }}
                        </div>
                    </div>     
                    <h3 class="font-bold capitalize">{{ the_title() }}</h3>
                </a>
                @php
                    $i++ 
                @endphp
            @endforeach
            @php wp_reset_postdata() @endphp
        </div>
    </div>
@endif