<div class="bg-white">
    <div id="live-last-news" class="live-last-news" style="display:none;">
        <div class="py-8 pl-4 pr-4 md:pr-0 overflow-y-scroll overflow-x-hidden h-full">
            <div class="grid grid-cols-12 md:gap-x-20">
                <div class="col-span-12 md:col-span-4">
                    <div class="relative w-full h-0 overflow-hidden pb-16/9">
                        <iframe class="w-full h-full absolute left-0 top-0 overflow-hidden" title="{{ __('Playlist of our latest video and audio content', 'sage') }}" frameborder="0" type="text/html" src="{{ the_field('live_video_url', 'option')}}?mute=1?autoplay=1" width="100%" height="100%" allowfullscreen allow="autoplay"> </iframe>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-8">
                    <div class="mt-6 mb:mt-14 mb-6">
                        <div class="inline-block text-4xl uppercase text-black mr-4 font-bold">{{ __('Latest news', 'sage') }}</div>
                        <a href="{{ get_post_type_archive_link('post')}}" class="inline-block text-xs uppercase link--arrow link--arrow-right">{{ __('see all', 'sage')}}</a>
                    </div>
        
                    @query([
                        'posts_per_page' => 10,
                        'orderby'        => 'ASC',
                        'post_type'      => 'post',
                        'post_status'    => 'publish',
                    ])

                    <div id="live-last-news-slider" class="grid gap-y-8 pb-36 sm:pb-0 sm:flex sm:overflow-x-auto sm:overflow-y-hidden scrolling-touch snap-type-mandatory scrollbar-hidden">
                        @posts
                            <div class="live-last-news--item relative snap-align-start md:pr-16">
                                <a href="{{ the_permalink() }}" class="md:max-w-lastnews block">
                                    <div class="grid grid-cols-12 gap-x-4 md:w-100vw md:max-w-lastnews">
                                        <div class="col-span-4">
                                            <div class="relative pb-1/1 h-0">
                                                {{ the_post_thumbnail('1-1_md', array('class' => 'absolute top-0 object-cover h-full w-full')) }}
                                            </div>
                                        </div>
                                        <div class="col-span-8">
                                            <div class="relative uppercase font-bold text-black opacity-30 text-xs mb-1">{{ get_time_since_posted() }}</div>
                                            <h2 class="relative font-bold text-sm">{{ the_title()}}</h2>
                                            <div class="w-screen h-full"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endposts
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>