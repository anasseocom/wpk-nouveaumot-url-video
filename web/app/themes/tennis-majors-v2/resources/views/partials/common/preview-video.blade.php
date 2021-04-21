<a href="{{ the_permalink() }}" class="preview preview--video">
    {{ the_post_thumbnail('full', array('class' => 'thumbnail')) }}
    <div class="gradient"></div>
    <div class="relative w-10 mt-6 mb-2">
        @include('partials.images.play')
    </div>
    <h4 class="title">{{ the_title()}}</h4>
    <div class="relative">{{ the_time('j F Y') }}</div>
</a>