@php 
    global $post;
    $posts_on_top = get_field('posts_on_top', 'option');
    $i = 0;
    $my_current_lang = apply_filters( 'wpml_current_language', NULL );
@endphp

@if($posts_on_top)
    <div id="slider-cards" class="max-w-screen-xl ml-4 xl:m-auto py-5 lg:py-8 relative">
        <div class="-ml-2 xl:-mx-2 overflow-hidden">
            <div id="slider-cards--slider" class="slider-preview-mode flex overflow-x-auto scrolling-touch snap-type-mandatory scrollbar-hidden">
                @foreach( $posts_on_top as $post)
                    @php
                        setup_postdata($post);
                    @endphp
                    <div class="snap-align-start transform origin-center scale-100 transition-transform duration-500 card-{{$i}}" id="card-{{$i}}">
                        @include('partials.common.preview-slider')
                    </div>
                    @php
                        $i++;
                    @endphp
                @endforeach
                @php wp_reset_postdata() @endphp
            </div>
        </div>
    </div>
@endif
@if($my_current_lang =='fr')         
<a href="https://www.tenniswarehouse-europe.com/catpage-LACFSJUNE.html?from=kicker&vat=fr&lang=fr" rel="nofollow sponsored" target="_blank">
    <figure class="w-full h-full">
        <img src="./../../../images/ope-june/hp-fr.jpg" alt="">
    </figure>
</a>
@endif
@if($my_current_lang =='en')
<a href="https://www.tenniswarehouse-europe.com/catpage-LACFSJUNE.html?from=kicker&lang=en" rel="nofollow sponsored" target="_blank">
    <figure class="w-full h-full">
        <img src="./../../../images/ope-june/hp-en.jpg" alt="">
    </figure>
</a>
@endif
