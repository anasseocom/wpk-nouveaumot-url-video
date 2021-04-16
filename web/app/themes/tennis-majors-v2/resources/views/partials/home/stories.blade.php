@php 
    global $post;
    $stories_on_top = get_field('stories_on_top');
    $i = 0;
@endphp
    <div id="top-stories" class="py-8 pl-4 relative">
        <div class="max-w-screen-lg m-auto">
            <h2 class="text-4xl uppercase pl-4 text-black pb-8">10 Stories to read now</h2>
        </div>
        <div id="top-stories-slider">
            @foreach( $stories_on_top as $post)
                <div>
                    <div class="rounded-md overflow-hidden relative pb-stories mb-6">
                        <img class="absolute w-full h-full object-cover top-0 left-0" src="{{ the_post_thumbnail_url() }}">
                        <div class="absolute bg-black  text-white w-24 h-24 bottom-0 left-0 leading-number-stories text-center text-5xl font-bold">
                            {{ $i + 1 }}
                        </div>
                    </div>     
                    <h3 class="font-bold capitalize">{{ the_title() }}</h3>
                </div>
                @php wp_reset_postdata() @endphp
                @php
                    $i++ 
                @endphp
            @endforeach
        </div>
    </div>