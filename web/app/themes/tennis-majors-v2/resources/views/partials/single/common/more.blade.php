@php
  $current_post_id = get_the_ID();
  $i = 0;
@endphp
<div class="bg-black text-white py-20 px-4">
    @query([
          'post_type' => 'post',
          'posts_per_page' => 6,
        ])
    <div class="max-w-screen-xl m-auto">
        <h2 class="uppercase text-4xl mb-12">{{ __('More', 'sage') }}</br> <span class="font-bold">{{ __('tennis news', 'sage') }}</span></h2>
        <div class="grid gap-12 grid-rows-2 grid-cols-3">
            @posts
            @if(get_the_ID() != $current_post_id && $i < 5)
                <a href="{{ the_permalink() }}" class="preview--news-more">
                    <div class="content-more">
                        <div class="text-xs mb-4">@include('partials.single.common.time-bilingue')</div>
                        <h3 class="font-bold mb-2 title">{{ the_title() }}</h3>
                        <div>{{ wp_trim_words( get_the_excerpt(), 13, '...' ) }}</div>
                        @include('partials.common.author')
                    </div>
                    <div class="thumbnail-container">
                        <div class="thumbnail">
                            <div class="gradient"></div>
                            {{ the_post_thumbnail('1-1_md') }}
                        </div>
                    </div>
                </a>
                @php
                $i++ 
                @endphp
            @endif
            @endposts
        </div>
    </div>
</div>