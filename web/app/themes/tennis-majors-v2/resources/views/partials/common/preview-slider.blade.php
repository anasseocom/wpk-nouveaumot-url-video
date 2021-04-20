<a href="{{ the_permalink() }}" class="preview--slider">
    <img src="{{ the_post_thumbnail_url() }}" class="thumbnail">
    <div class="gradient"></div>
    <div class="content">
        <div class="text-xs mb-5">{{ the_time('j F Y') }}</div>
        <h1 class="title">{{ the_title() }}</h1>
        <div class="mb-5">{{ get_the_excerpt() }}</div>
        @include('partials.common.author')
    </div>
</a>