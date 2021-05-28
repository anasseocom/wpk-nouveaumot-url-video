@php
$my_current_lang = apply_filters( 'wpml_current_language', NULL );
@endphp
@if($my_current_lang =='fr')                       
    <div id="menu-thumbs" class="fixed w-full bottom-0 sm:hidden bg-black">
        <div class="grid grid-cols-4 gap-x-2 max-w-xs m-auto">
            <a href="{{ get_permalink( get_page_by_path( 'nos-videos' ) )}}" class="text-z flex flex-col items-center py-4">
            {{ __('Videos', 'sage') }}
                <div class="h-full flex item-end">
                    @include('partials.images.thumbs.videos')
                </div>
            </a>
            <a href="{{ get_permalink( get_page_by_path( 'nos-articles' ) )}}" class="text-z flex flex-col items-center py-4">
            {{ __('Features', 'sage')}}
                @include('partials.images.thumbs.features')
            </a>
            <a href="{{ get_permalink( get_page_by_path( 'dernieres-infos' ) )}}" class="text-z flex flex-col items-center py-4">
            {{ __('News', 'sage')}}
                @include('partials.images.thumbs.news')
            </a>
            <a href="/fr/roland-garros-actualite" class="text-z flex flex-col items-center py-4">
            {{ __('Roland-Garros', 'sage')}}
                @include('partials.images.thumbs.rg')
            </a>
        </div>
    </div>
@endif
@if($my_current_lang =='en')
    <div id="menu-thumbs" class="fixed w-full bottom-0 sm:hidden bg-black">
        <div class="grid grid-cols-4 gap-x-2 max-w-xs m-auto">
            <a href="{{ get_permalink( get_page_by_path( 'video-series' ) )}}" class="text-z flex flex-col items-center py-4">
            {{ __('Videos', 'sage') }}
                <div class="h-full flex item-end">
                    @include('partials.images.thumbs.videos')
                </div>
            </a>
            <a href="{{ get_permalink( get_page_by_path( 'features' ) )}}" class="text-z flex flex-col items-center py-4">
            {{ __('Features', 'sage')}}
                @include('partials.images.thumbs.features')
            </a>
            <a href="{{ get_permalink( get_page_by_path( 'news' ) )}}" class="text-z flex flex-col items-center py-4">
            {{ __('News', 'sage')}}
                @include('partials.images.thumbs.news')
            </a>
            <a href="/roland-garros-news" class="text-z flex flex-col items-center py-4">
            {{ __('The French', 'sage')}}
                @include('partials.images.thumbs.rg')
            </a>
        </div>
    </div>
@endif