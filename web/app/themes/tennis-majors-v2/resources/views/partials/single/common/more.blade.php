@php
  $current_post_id = get_the_ID();
  $i = 0;
@endphp
<div class="bg-black text-white py-20">
    @query([
          'post_type' => 'post',
          'posts_per_page' => 6,
        ])
    <div class="max-w-screen-xl m-auto">
      <h2 class="uppercase text-4xl mb-12">More</br> <span class="font-bold">tennis news</span></h2>
        <div class="grid gap-8 grid-rows-2 grid-cols-3">
            @posts
            @if(get_the_ID() != $current_post_id && $i < 5)
                <a href="{{ the_permalink() }}" class="preview--news-more">
                    <div class="content">
                        <div class="text-xs mb-4">{{ the_time('j F Y') }}</div>
                        <h3 class="font-bold mb-2 title">{{ the_title() }}</h3>
                        <div>{{ wp_trim_words( get_the_excerpt(), 13, '...' ) }}</div>
                        @include('partials.common.author')
                    </div>
                    <div class="thumbnail">
                        <div class="absolute w-full h-full object-cover top-0 left-0 bg-gradient-to-t from-black to-transparent opacity-80"></div>
                        {{the_post_thumbnail('full')}}
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