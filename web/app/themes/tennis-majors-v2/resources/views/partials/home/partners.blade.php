@php 
    global $post;
    $partners = get_field('partners_on_top', 'option');
    $i = 0;
@endphp
@if( $partners )
    <div id="partners" class="pt-12 pb-40 px-4 relative overflow-hidden">
        <div class="max-w-screen-lg m-auto">
            <h2 class="text-4xl uppercase pl-4 text-black pb-8">{{ __('Our', 'sage') }} <span class="font-bold">{{ __('partners', 'sage') }}</span></h2>
        </div>
        <div id="top-stories-slider" class="max-w-screen-xl m-auto">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3">
                @foreach( $partners as $post)
                        <a href="{{ the_field('partner_website_url')}}"  class="col-span-1 rounded-lg border-2 border-black overflow-hidden shadow-sm hover:shadow-lg transition-all ease">
                            <h3 class="text-z">{{ the_title() }}</h3>
                            {{ the_post_thumbnail('16-9_xs', array('class' => '16-9_xs')) }}
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