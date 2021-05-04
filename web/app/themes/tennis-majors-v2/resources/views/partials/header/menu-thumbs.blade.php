<div id="menu-thumbs" class="fixed w-full bottom-0 sm:hidden bg-black">
    <div class="grid grid-cols-4 gap-x-2 max-w-xs m-auto">
        <a href="{{ get_permalink( get_page_by_path( 'shows' ) )}}" class="text-z flex flex-col items-center py-4">
        {{ __('Videos', 'sage')
            <div class="h-full flex item-end">
                @include('partials.images.thumbs.videos')
            </div>
        </a>
        <a href="{{ get_permalink( get_page_by_path( 'features' ) )}}" class="text-z flex flex-col items-center py-4">
        {{ __('Features', 'sage')
            @include('partials.images.thumbs.features')
        </a>
        <a href="{{ get_permalink( get_page_by_path( 'news' ) )}}" class="text-z flex flex-col items-center py-4">
        {{ __('News', 'sage')
            @include('partials.images.thumbs.news')
        </a>
        <a href="{{ get_permalink( get_page_by_path( 'lives' ) )}}" class="text-z flex flex-col items-center py-4">
        {{ __('Lives', 'sage')
            @include('partials.images.thumbs.lives')
        </a>
    </div>
</div>