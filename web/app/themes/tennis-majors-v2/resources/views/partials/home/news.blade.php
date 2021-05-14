@php
$my_current_lang = apply_filters( 'wpml_current_language', NULL );
@endphp
@query([
    'post_type' => 'post',
    'posts_per_page' => 6,
    'facetwp' => true,
    ])
    

<div class="pt-12 pb-12 lg:px-10 xl:px-20 relative bg-black text-white">
    <div class="max-w-screen-lg m-auto px-4">
        <h2 class="text-4xl uppercase pl-4 text-white pb-8">{{ __('Tennis', 'sage') }} <span class="font-bold">{{ __('news', 'sage') }}</span></h2>
    </div>
    <div class="max-w-screen-lg m-auto pl-4 facet-container flex scroll-mobile">
        @php
            global $post;
            $facet_1 = get_field('facet_1', 'option');
            $facet_2 = get_field('facet_2', 'option');
            $facet_3 = get_field('facet_3', 'option');
        @endphp
        <?php echo do_shortcode('[facetwp facet="'.$facet_1.'"]') ?>
        <?php echo do_shortcode('[facetwp facet="'.$facet_2.'"]') ?>
        <?php echo do_shortcode('[facetwp facet="'.$facet_3.'"]') ?>
    </div>
    <div class="py-12 px-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-14 md:gap-y-20 gap-x-12 lg:gap-x-10 xl:gap-x-32 max-w-screen-xxl m-auto">
        @posts
            @if(has_post_thumbnail())
                @include('partials.common.preview-default-home')
            @else
                @include('partials.common.preview-flash-home')
            @endif
        @endposts
    </div>
    <div class="flex flex-col items-center my-8">
        @if($my_current_lang =='fr')
            <a href="{{ get_permalink( get_page_by_path( 'dernieres-infos' ) )}}" class="btn btn--white btn--arrow-right">{{ __('Discover all', 'sage')}}</a>
        @endif
        @if($my_current_lang =='en')
            <a href="{{ get_permalink( get_page_by_path( 'news' ) )}}" class="btn btn--white btn--arrow-right">{{ __('Discover all', 'sage')}}</a>
        @endif
    </div>
</div>