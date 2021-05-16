<button id="live-last-news--toggle" aria-label="{{ __('Opens and Close Last News Menu', 'sage') }}" class="w-8 h-16 lg:h-20 flex flex-row flex-grow items-center relative cursor-pointer live-last-news--toggle">
    <div class="flex flex-col flex-grow items-center">
        @include('partials.images.flash')
    </div>
    <span class="live-last-news--toggle-border absolute h-2 bottom-0 left-0 bg-black transition-all ease-in-out duration-500"></span>
    <div id="pulse" class="pulse"></div>
</button>