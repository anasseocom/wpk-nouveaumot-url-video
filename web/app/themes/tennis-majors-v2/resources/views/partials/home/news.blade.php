
@query([
    'post_type' => 'post',
    'posts_per_page' => 6,
    'facetwp' => true,
    ])

<div id="partners" class="py-12 px-4 relative bg-black text-white">
    <div class="max-w-screen-lg m-auto">
        <h2 class="text-4xl uppercase pl-4 text-white pb-8">Tennis news</h2>
    </div>
    <div class="max-w-screen-lg m-auto">
        @shortcode('[facetwp facet="category"]')
    </div>
    <div class="py-12 px-4 grid grid-cols-3 gap-y-20 gap-x-24 max-w-screen-xxl m-auto">
        @posts
            @if(has_post_thumbnail())
                @include('partials.common.preview-default-home')
            @else
                @include('partials.common.preview-flash-home')
            @endif
        @endposts
    </div>
    <div class="flex flex-col items-center my-8">
        <a href="{{ get_permalink( get_page_by_path( 'news' ) )}}" class="btn btn--white btn--arrow-right">Discover all</a>
    </div>
</div>