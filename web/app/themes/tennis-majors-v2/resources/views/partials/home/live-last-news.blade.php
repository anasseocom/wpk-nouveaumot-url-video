<div id="live-last-news" class="px-4 mt-8">
    <div class="grid grid-cols-12 gap-x-8">
        <div class="col-span-4">
            <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;">
                <iframe style="width:100%;height:100%;position:absolute;left:0px;top:0px;overflow:hidden" frameborder="0" type="text/html" src="{{ the_field('live_video_url')}}?autoplay=1" width="100%" height="100%" allowfullscreen allow="autoplay"> </iframe>
            </div>
        </div>
        <div class="col-span-7 col-start-6">
            <div class="mt-8">
                <div class="inline-block text-4xl uppercase text-black mr-4 font-bold">Last news</div>
                <div class="inline-block uppercase">see all</div>
            </div>
            
            @php
                global $post;
                $last_posts = get_posts( array(
                    'posts_per_page' => 10,
                    'orderby'        => 'ASC',
                    'post_type'      => 'post',
                    'post_status'    => 'publish'
                ) );
            @endphp
            <div id="live-last-news-slider">
                @foreach( $last_posts as $post)
                <a href="{{ the_permalink() }}">
                    @php
                        setup_postdata($post);
                    @endphp
                    <div class="relative">{{ the_time('j F Y') }}</div>
                    <h4 class="relative uppercase font-bold text-sm">{{ the_title()}}</h4>
                </a>

                @endforeach
                @php wp_reset_postdata() @endphp
            </div>
        </div>
    </div>
</div>