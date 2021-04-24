<a href="{{ the_permalink() }}" class="preview preview--basic">
    @if(has_post_thumbnail())
        <div class="thumbnail">
            {{ the_post_thumbnail('full') }}
        </div>
    @endif
    <div class="content mt-4">
        <div class="text-xs mb-3 font-bold">{{ the_time('j F Y') }}</div>
        <h1 class="title">{{ the_title() }}</h1>
        @if(has_excerpt())
            <div class="mb-5">{{ wp_trim_words( get_the_excerpt(), 13, '...' ) }}</div>
        @endif
        @include('partials.common.author')
    </div>
</a>