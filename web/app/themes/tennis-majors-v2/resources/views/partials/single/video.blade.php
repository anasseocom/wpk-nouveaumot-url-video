@php
  $pattern = get_shortcode_regex(['mot_video']);
  $shortcode = '';
@endphp
  
@if(preg_match("#".$pattern."#s", $post->post_content, $matches))
  @php $shortcode = $matches[0] @endphp
@endif

<div class="video px-4">
    <div class="max-w-screen-xl m-auto">
      <article @php post_class() @endphp >
        <div class="relative">
          <div>
            @include('partials.single.video.previous-next')
          </div>
          <div class="max-w-screen-lg m-auto">
            <h1 class="font-bold text-5xl text-center">@title</h1>
            <div class="font-bold mt-8 mb-4 text-lg max-w-screen-md m-auto text-center">@excerpt</div>
          <div>
          @if(!empty($shortcode))
            {{ do_shortcode( $shortcode ) }}
          @else
            @if(get_field('video_url'))
              <div id='player' style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;">
                <iframe style="width:100%;height:100%;position:absolute;left:0px;top:0px;overflow:hidden" frameborder="0" type="text/html" src="@field('video_url')?autoplay=1" width="100%" height="100%" allowfullscreen allow="autoplay"> </iframe>
              </div>
            @endif
          @endif

          <div class="max-w-screen-sm m-auto">
              @include('partials.single.common.author-date')
          </div>
          <div class="content">
            @php
              $content = strip_shortcodes(get_the_content());
              echo $content;
            @endphp
          </div>
          <div class="max-w-screen-sm m-auto">
              @include('partials.single.common.share')
          </div>
        </div>
      </article>
    </div>
</div>
@include('partials.single.common.more')
@include('partials.comments')