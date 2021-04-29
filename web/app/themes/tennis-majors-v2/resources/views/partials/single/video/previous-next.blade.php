@php
    global $post;
    $previous_video = get_previous_video($post);
    $next_video = get_next_video($post);
@endphp

<div>
    @php
      global $post;
      $post = $previous_video;
      setup_postdata($post);
    @endphp
    <a href="{{ the_permalink() }}" class="prev-next prev-next--prev group">
        <div class="prev-next--container">
            <div class="prev-next--arrow"></div>
            <div class="prev-next--content group-hover:translate-x-0">
                <div class="uppercase text-xs mb-2">
                    Previous
                </div>
                <div class="grid grid-cols-6 gap-2 pb-3">
                    <div class="font-bold col-span-4 text-sm flex items-center">
                        <div>
                            @title
                        </div>
                    </div>
                    <div class="flex items-center col-span-2">
                        <div class="relative pb-100-100 w-full h-0 rounded-xl overflow-hidden">
                            {{ the_post_thumbnail('full', array('class' => 'thumbnail absolute object-cover w-full h-full')) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    @php wp_reset_postdata() @endphp
</div>

<div>
    @php
        global $post;
        $post = $next_video;
        setup_postdata($post);
    @endphp
    <a href="{{ the_permalink() }}" class="prev-next prev-next--next group">
        <div class="prev-next--container">
            <div class="prev-next--arrow"></div>
            <div class="prev-next--content group-hover:translate-x-0">
                <div class="uppercase text-xs mb-2">
                    Next
                </div>
                <div class="grid grid-cols-6 gap-2 pb-3">
                    <div class="font-bold col-span-4 text-sm flex items-center">
                        <div class="flex items-center col-span-2">
                            <div class="relative pb-100-100 w-full h-0 rounded-xl overflow-hidden">
                                {{ the_post_thumbnail('full', array('class' => 'thumbnail absolute object-cover w-full h-full')) }}
                            </div>
                        </div>
                        <div class="font-bold">
                            <div>
                                @title
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    @php wp_reset_postdata() @endphp
  </div>