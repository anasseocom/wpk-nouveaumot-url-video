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

<div class="mx-4 my-8">
  <div class="uppercase text-xs mb-6">
    You might also like this
  </div>
  <div class="grid grid-cols-1 gap-y-6 mb-6">
    @foreach( $posts as $post)
        <a href="{{ the_permalink() }}" class="grid grid-cols-12 gap-x-6">
          <div class="h-0 relative pb-1/1 rounded-xl overflow-hidden col-span-4 md:col-span-2">
            {{ the_post_thumbnail('full', array('class' => 'absolute object-cover w-full h-full')) }}
            @if( get_post_type($post) == "videos")
              <div class="absolute w-10 left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                @include('partials.images.play')
              </div>
            @endif
          </div>
          <div class="col-span-8 md:col-span-10 relative">
            <div class="md:absolute top-0 font-bold md:mt-4 md:text-xl">@title</div>
            <div class="md:absolute bottom-0 uppercase text-xs mt-2 md:mt-6">tennis majors</div>
          </div>
        </a>
     
      @php wp_reset_postdata() @endphp
    @endforeach
  </div>
</div>