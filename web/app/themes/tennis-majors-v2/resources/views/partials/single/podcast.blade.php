<div class="video">
  <article @php post_class() @endphp >
    <div class="relative">
      <div class="video-header">
        <div class="max-w-screen-lg m-auto pt-8 sm:pt-12">
          <h1 class="font-bold text-3xl md:text-5xl max-w-screen-lg px-4 text-center text-white">@title</h1>
          <div class="font-bold mt-8 mb-4 text-lg max-w-screen-md m-auto text-center text-white px-4">@excerpt</div>
          <div class="text-white text-sm text-center mb-8">@include('partials.single.common.time-bilingue')</div>
        </div>
        @include('partials.single.podcast.player')
        @include('partials.single.podcast.previous-next')
      </div>
      @include('partials.single.podcast.figures')
      <div class="content">
        @content
      <div class="max-w-screen-sm m-auto">
          @include('partials.single.common.share')
      </div>
      @include('partials.single.podcast.ours')
    </div>
  </article>
</div>
@include('partials.single.common.more')
