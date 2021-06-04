@php
    global $post;
    $previous_video = get_previous_video($post);
    $next_video = get_next_video($post);
@endphp


<div class="grid grid-cols-1 md:grid-cols-2 bg-black">
    @if($previous_video)
        @php
            global $post;
            $post = $previous_video;
            setup_postdata($post);
        @endphp
        <a href="{{ the_permalink() }}" class="prev-next prev-next--prev group">
            <div class="prev-next--container">
                <div class="prev-next--arrow"></div>
                <div class="prev-next--content group-hover:translate-x-0 max-w-lg m-auto">
                    <div class="uppercase text-xs mb-2">{{ __('Previous', 'sage') }}</div>
                    <div class="grid grid-cols-12 gap-4 xl:pb-3">
                        <div class="flex items-center col-span-2 xl:col-span-4">
                            <div class="relative pb-1/1 w-full h-0 rounded-xl overflow-hidden">

                                {{ the_post_thumbnail('1-1_sm', array('class' => 'thumbnail absolute object-cover w-full h-full')) }}
                            </div>
                        </div>
                        <div class="font-bold col-span-10 xl:col-span-8 text-sm flex items-center">
                            <div>@title</div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @php wp_reset_postdata() @endphp
    @endif

    @if($next_video)
        @php
            global $post;
            $post = $next_video;
            setup_postdata($post);
        @endphp
        <a href="{{ the_permalink() }}" class="prev-next prev-next--next group">
            <div class="prev-next--container">
                <div class="prev-next--arrow"></div>
                <div class="prev-next--content group-hover:translate-x-0 max-w-lg m-auto">
                    <div class="uppercase text-xs mb-2">{{ __('Next', 'sage') }}</div>
                    <div class="grid grid-cols-12 gap-4 xl:pb-3">
                        <div class="flex items-center col-span-2 xl:col-span-4 xl:col-start-9 row-start-1">
                            <div class="relative pb-1/1 w-full h-0 rounded-xl overflow-hidden">
                                {{ the_post_thumbnail('1-1_sm', array('class' => 'thumbnail absolute object-cover w-full h-full')) }}
                            </div>
                        </div>
                        <div class="font-bold col-span-10 xl:col-span-8 xl:col-start-1 text-sm flex items-center row-start-1">
                            <div>@title</div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @php wp_reset_postdata() @endphp
    @endif
</div>