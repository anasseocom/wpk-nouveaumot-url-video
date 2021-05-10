<a href="{{ the_permalink() }}" class="preview preview--slider">
    {{ the_post_thumbnail('16-9_sm', array('class' => 'thumbnail')) }}
    <div class="gradient"></div>
    <div class="content h-full">
        <div class="absolute top-0 text-xs">{{ the_time('j F Y') }}</div>
        <div class="w-screen h-full"></div>
        <div class="absolute bottom-0">
            <h1 class="title">{{ the_title() }}</h1>
            @if(has_excerpt())
                <div class="mb-5">{{ wp_trim_words( get_the_excerpt(), 11, '...' ) }}</div>
            @endif
            @include('partials.common.author')
        </div>
    </div>
</a>