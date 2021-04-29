@php 
    global $post;
    $partners = get_field('partners_on_top', 'option');
    $i = 0;
@endphp
@if( $partners )
    <div id="partners" class="py-12 px-4 relative">
        <div class="max-w-screen-lg m-auto">
            <h2 class="text-4xl uppercase pl-4 text-black pb-8">Our partners</h2>
        </div>
        <div id="top-stories-slider" class="max-w-screen-xl m-auto">
            <div class="grid grid-cols-5 gap-3">
                @foreach( $partners as $post)
                        <a href="{{ the_field('post_url')}}"  class="col-span-1 rounded-lg border-2 border-black overflow-hidden">
                            <h3 class="text-z">{{ the_title() }}</h3>
                            <img src="{{ the_post_thumbnail_url() }}">
                        </a>
                    @php wp_reset_postdata() @endphp
                    @php
                        $i++ 
                    @endphp
                @endforeach
            </div>
        </div>
    </div>
@endif