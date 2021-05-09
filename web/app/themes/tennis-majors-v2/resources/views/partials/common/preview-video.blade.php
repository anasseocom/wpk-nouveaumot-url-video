<a href="{{ the_permalink() }}" class="preview preview--video">
    {{ the_post_thumbnail('16-9_xs', array('class' => 'thumbnail')) }}
    <div class="gradient"></div>
    <div class="h-full">
        <div class="w-screen h-full"></div>
        <div class="p-4 h-full top-0 left-0">
            <div class="absolute bottom-4 right-4 w-14 sm:w-10 sm:relative sm:right-auto sm:bottom-auto sm:mt-2 sm:mb-2">
                @include('partials.images.play')
            </div>
            <h4 class="title">{{ the_title()}}</h4>
            <div class="absolute top-4 text-xs sm:relative sm:top-auto sm:mt-2">{{ the_time('j F Y') }}</div>
        </div>
    </div>
</a>