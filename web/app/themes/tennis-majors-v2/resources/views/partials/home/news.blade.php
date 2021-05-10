
@query([
    'post_type' => 'post',
    'posts_per_page' => 6,
    'facetwp' => true,
    ])

<div class="pt-12 pb-12 px-4 lg:px-10 xl:px-20 relative bg-black text-white">
    <div class="max-w-screen-lg m-auto">
        <h2 class="text-4xl uppercase pl-4 text-white pb-8">{{ __('Tennis', 'sage') }} <span class="font-bold">{{ __('news', 'sage') }}</span></h2>
    </div>
    <div class="max-w-screen-lg m-auto">
        @shortcode('[facetwp facet="category"]')
    </div>
    <div class="py-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 md:gap-y-6 md:gap-y-10 lg:gap-x-10 xl:gap-x-32 max-w-screen-xxl m-auto">
        @posts
            @if(has_post_thumbnail())
                @include('partials.common.preview-default-home')
            @else
                @include('partials.common.preview-flash-home')
            @endif
        @endposts
    </div>
    <div class="flex flex-col items-center my-8">
        <a href="{{ get_permalink( get_page_by_path( 'news' ) )}}" class="btn btn--white btn--arrow-right">{{ __('Discover all', 'sage')}}</a>
    </div>
</div>