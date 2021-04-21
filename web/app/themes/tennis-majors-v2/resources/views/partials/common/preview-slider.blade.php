<a href="{{ the_permalink() }}" class="preview preview--slider">
    {{ the_post_thumbnail('full', array('class' => 'thumbnail')) }}
    <div class="gradient"></div>
    <div class="content">
        <div class="text-xs mb-5">{{ the_time('j F Y') }}</div>
        <h1 class="title">{{ the_title() }}</h1>
        @if(has_excerpt())
            <div class="mb-5">{{ wp_trim_words( get_the_excerpt(), 13, '...' ) }}</div>
        @endif
        @include('partials.common.author')
    </div>
</a>