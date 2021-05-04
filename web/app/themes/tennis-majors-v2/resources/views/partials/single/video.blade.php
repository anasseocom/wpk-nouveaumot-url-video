@php
  global $post;
  $pattern = get_shortcode_regex(['mot_video']);
  $shortcode = '';
@endphp
  
@if(preg_match("#".$pattern."#s", $post->post_content, $matches))
  @php $shortcode = $matches[0] @endphp
@endif

<div class="video">
  <article @php post_class() @endphp >
    <div class="relative">
      <div class="video-header">
        <div class="max-w-screen-lg m-auto pt-12">
          <h1 class="font-bold text-5xl text-center text-white">@title</h1>
          <div class="font-bold mt-8 mb-4 text-lg max-w-screen-md m-auto text-center text-white">@excerpt</div>
          <div class="text-white text-sm text-center mb-8">@published('j F Y')</div>
        </div>
        @include('partials.single.video.player')
        @include('partials.single.video.previous-next')
      </div>
      @include('partials.single.video.host-guest')
      <div class="content max-w-screen-lg m-auto">
        @php
          $content = strip_shortcodes(get_the_content());
          echo $content;
        @endphp
      </div>
      <div class="max-w-screen-sm m-auto">
          @include('partials.single.common.share')
      </div>
      <div>
        @include('partials.single.video.ours')
      </div>
    </div>
  </article>
</div>
@include('partials.single.common.more')
@include('partials.comments')
