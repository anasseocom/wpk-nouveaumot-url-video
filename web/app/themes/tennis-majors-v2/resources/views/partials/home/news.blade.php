@php
$posts = new WP_Query(
  array(
    'post_type' => 'post',
    'posts_per_page' => 9,
    'facetwp' => true,
  )
);
@endphp
<div id="partners" class="py-12 px-4 relative bg-black text-white">
    <div class="max-w-screen-lg m-auto">
        <h2 class="text-4xl uppercase pl-4 text-white pb-8">Tennis news</h2>
    </div>
    <div class="max-w-screen-lg m-auto">
        <?php echo do_shortcode( '[facetwp facet="category"]' ); ?>
    </div>
    <div class="px-4 grid grid-cols-3 gap-4">
        @while ($posts->have_posts()) @php $posts->the_post() @endphp
            <div class="p-4">
                @php
                    $author_avatar_url = get_avatar_url(get_the_author_meta('email'));
                    $author_name = get_the_author_meta( 'first_name' )." ".get_the_author_meta( 'last_name' );
                @endphp
                <div class="text-xs mb-4">{{ the_time('j F Y') }}</div>
                <h3 class="font-bold text-xl mb-2">{{ the_title() }}</h3>
                <div>{{ the_excerpt() }}</div>
                <div class="flex flex-row items-center mt-4">
                    <div>
                        <img class="rounded-full w-6 flex" loading="lazy" src="{{ $author_avatar_url }}">
                    </div>
                    <div class="ml-2 uppercase text-xs">{{ $author_name }}</div>
                </div>
            </div>
        @endwhile
    </div>
</div>