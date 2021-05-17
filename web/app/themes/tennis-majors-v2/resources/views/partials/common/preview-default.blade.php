<a href="{{ the_permalink() }}" class="preview preview--default group">
    <div class="thumbnail">
        <div class="absolute w-full h-full object-cover top-0 left-0 bg-gradient-to-t from-black to-transparent opacity-20 transition-all group-hover:opacity-0 duration-200 z-1"></div>
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