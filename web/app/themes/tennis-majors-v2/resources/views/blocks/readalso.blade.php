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
  SupportsMultiple: true
--}}

@php
  global $post;
  $posts = get_field('read_also');
  $posts_count = count($posts);
@endphp

@if($posts_count > 1)
<div class="read-also pb-2 pt-4">
  <div class="uppercase text-xs mb-6">
    You might also like this
  </div>
  <div class="grid grid-cols-1 gap-y-6 mb-6">
    @foreach( $posts as $post)
      <a href="{{ the_permalink() }}" class="grid grid-cols-8 gap-x-4 sm:gap-x-8 text-black group">
        <div class="h-0 relative pb-1/1 rounded-xl overflow-hidden col-span-2">
          {{ the_post_thumbnail('1-1_sm', array('class' => 'absolute object-cover w-full h-full')) }}
          @if( get_post_type($post) == "videos")
            <div class="absolute w-10 left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 group-hover:w-12 transition-all ease">
              @include('partials.images.play')
            </div>
          @endif
          </div>
          <div class="col-span-6 relative">
            <div class="mt-2 sm:mt-6 md:absolute top-0 font-bold md:text-lg text-black">@title</div>
            <div class="sm:absolute sm:bottom-0 uppercase text-xs mt-6">tennis majors</div>
          </div>
        </a>
      @php wp_reset_postdata() @endphp
    @endforeach
  </div>
</div>
@else
  @foreach( $posts as $post)
  <div class="read-also  read-also--single mx-4 pb-2 pt-4">
    <div class="grid grid-cols-1 gap-y-6 mb-6">
      @foreach( $posts as $post)
          <a href="{{ the_permalink() }}" class="grid grid-cols-8 gap-x-4 sm:gap-x-8 text-black group">
            <div class="h-0 relative pb-1/1 rounded-xl overflow-hidden col-span-2">
              {{ the_post_thumbnail('1-1_sm', array('class' => 'absolute object-cover w-full h-full py-0')) }}
              @if( get_post_type($post) == "videos")
                <div class="absolute w-10 left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 group-hover:w-12 transition-all ease">
                  @include('partials.images.play')
                </div>
              @endif
            </div>
            <div class="col-span-6 relative">
              @if( get_post_type($post) == "videos")
                <div class="sm:absolute sm:top-0 uppercase text-xs">Watch also</div>
              @else 
                <div class="sm:absolute sm:top-0 uppercase text-xs">Read also</div>
              @endif
              <div class="mt-2 sm:mt-6 md:absolute top-0 font-bold md:text-lg text-black">@title</div>
              <div class="sm:absolute sm:bottom-0 uppercase text-xs mt-6">Tennis Majors</div>
            </div>
          </a>
        @php wp_reset_postdata() @endphp
      @endforeach
    </div>
  </div>
  @endforeach
@endif