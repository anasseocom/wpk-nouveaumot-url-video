<div id="live-last-news" class="pl-4 mt-8">
    <div class="grid grid-cols-12 gap-x-8">
        <div class="col-span-4">
            <div class="pr-4">
                <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;">
                    <iframe style="width:100%;height:100%;position:absolute;left:0px;top:0px;overflow:hidden" frameborder="0" type="text/html" src="{{ the_field('live_video_url')}}?autoplay=1" width="100%" height="100%" allowfullscreen allow="autoplay"> </iframe>
                </div>
            </div>
        </div>
        <div class="col-span-8 col-start-5 pl-12">
            <div class="mt-14 mb-6">
                <div class="inline-block text-4xl uppercase text-black mr-4 font-bold">Last news</div>
                <a href="{{ get_post_type_archive_link('post')}}" class="inline-block text-xs uppercase link--arrow link--arrow-right">see all</a>
            </div>

            @query([
                'posts_per_page' => 10,
                'orderby'        => 'ASC',
                'post_type'      => 'post',
                'post_status'    => 'publish',
            ])
            
            <div id="live-last-news-slider">
                @posts
                    <a href="{{ the_permalink() }}" class="max-w-lastnews">
                        <div class="relative uppercase font-bold text-black opacity-30 text-xs mb-1">{{ get_time_since_posted() }}</div>
                        <h4 class="relative font-bold text-sm">{{ the_title()}}</h4>
                    </a>
                @endposts
            </div>
        </div>
    </div>
</div>