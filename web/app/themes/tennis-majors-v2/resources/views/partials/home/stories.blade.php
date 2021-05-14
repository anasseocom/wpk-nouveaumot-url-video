@php 
    global $post;
    $stories_on_top = get_field('stories_on_top', 'option');
    $i = 0;
@endphp
@if( $stories_on_top )
    <div id="top-stories" class="pt-20 pb-8 pl-4 relative">
        <div class="max-w-screen-lg m-auto">
            <h2 class="text-4xl uppercase pl-4 text-black pb-8"><span class="font-bold">10</span> {{ __('stories', 'sage') }} <span class="font-bold">{{ __('to read now', 'sage') }}</span></h2>
        </div>
        <div class="-ml-2">
            <div id="top-stories-slider" class="flex overflow-x-auto scrolling-touch snap-type-mandatory scrollbar-hidden">
                @foreach( $stories_on_top as $post)
                    <div class="snap-align-start">
                        @if(get_post_type($post) == "curations")
                            <a href="{{ the_field('post_url')}}" target="_blank" class="max-w-stories block mx-2">
                        @else
                            <a href="{{ the_permalink( )}}" class="max-w-stories block mx-2">
                        @endif
                                <div class="w-screen h-full"></div>
                                <div class="rounded-md overflow-hidden relative pb-12/10 mb-6 w-full">
                                {{ the_post_thumbnail('5-6_sm', array('class' => 'absolute w-full h-full object-cover top-0 left-0 5-6_sm')) }}
                                    <div class="absolute bg-black  text-white w-24 h-24 bottom-0 left-0 leading-number-stories text-center text-5xl number-size-{{ $i + 1 }}">
                                        {{ $i + 1 }}
                                    </div>
                                </div>     
                                <h3 class="font-bold capitalize">{{ the_title() }}</h3>
                                @if(get_post_type($post) == "curations")
                                    <div class="flex mt-3">
                                        <div class="flex w-8 items-center">
                                            <div class="w-full pb-1/1 relative">
                                              <img class="rounded-full w-full h-full object-cover absolute top-0" loading="lazy" src="{{ the_field('external_media_image')}}">
                                            </div>
                                          </div>
                                        <div class="ml-2 flex items-center">
                                            <div>
                                                {{ the_field('external_media_name')}}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </a>
                        @php
                            $i++ 
                        @endphp
                    </div>
                @endforeach
                @php wp_reset_postdata() @endphp
            </div>
        </div>
    </div>
@endif