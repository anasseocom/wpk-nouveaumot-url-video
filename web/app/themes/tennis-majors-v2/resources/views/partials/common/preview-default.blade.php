<a href="{{ the_permalink() }}" class="preview preview--default">
    <div class="thumbnail">
        {{ the_post_thumbnail('1-1_sm') }}
    </div>
    <div class="content">
        <div class="text-xs mb-3">{{ get_time_since_posted() }}</div>
        <h1 class="title">{{ the_title() }}</h1>
        @if(has_excerpt())
            <div class="mb-4">{{ wp_trim_words( get_the_excerpt(), 13, '...' ) }}</div>
        @endif
        @include('partials.common.author')
    </div>
</a>