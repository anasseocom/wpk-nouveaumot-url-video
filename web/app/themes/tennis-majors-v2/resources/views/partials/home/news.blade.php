
@query([
    'post_type' => 'post',
    'posts_per_page' => 9,
    'facetwp' => true,
    ])

<div id="partners" class="py-12 px-4 relative bg-black text-white">
    <div class="max-w-screen-lg m-auto">
        <h2 class="text-4xl uppercase pl-4 text-white pb-8">Tennis news</h2>
    </div>
    <div class="max-w-screen-lg m-auto">
        @shortcode('[facetwp facet="category"]')
    </div>
    <div class="px-4 grid grid-cols-3 gap-4">
        @posts
            <a  href="@authorurl" class="p-4">
                <div>
                    <div class="text-xs mb-4">{{ the_time('j F Y') }}</div>
                    <h3 class="font-bold text-xl mb-2">{{ the_title() }}</h3>
                    <div>{{ the_excerpt() }}</div>
                    @include('partials.common.author')
                </div>
                @if(has_post_thumbnail())
                    {{ the_post_thumbnail('full', array('class' => 'thumbnail')) }}
                @endif
            </a>
        @endposts
    </div>
</div>