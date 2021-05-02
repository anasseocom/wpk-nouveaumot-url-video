{{--
  Title: Read also
  Category: formatting
  Icon: admin-post
  Keywords: read  also
  Mode: edit
  Align: left
  PostTypes: page post videos
  SupportsAlign: full
  SupportsMode: false
  SupportsMultiple: false
--}}

@php
  global $post;
  $posts = get_field('read_also')
@endphp

<div>
  <div class="uppercase text-xs mb-6">
    You might also like this
  </div>
  <div class="grid grid-cols-1 gap-y-6">
    @foreach( $posts as $post)
        <a href="{{ the_permalink() }}" class="grid grid-cols-5 gap-x-6">
          <div class="relative pb-1/1 rounded-xl overflow-hidden col-span-1">
            {{ the_post_thumbnail('full', array('class' => 'absolute object-cover w-full h-full')) }}
            @if( get_post_type($post) == "videos")
              <div class="absolute w-10 left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                @include('partials.images.play')
              </div>
            @endif
          </div>
          <div class="col-span-4">
            <div class="font-bold mt-6">@title</div>
            <div class="uppercase text-xs mt-6">tennis majors</div>
          </div>
        </a>
     
      @php wp_reset_postdata() @endphp
    @endforeach
  </div>
</div>