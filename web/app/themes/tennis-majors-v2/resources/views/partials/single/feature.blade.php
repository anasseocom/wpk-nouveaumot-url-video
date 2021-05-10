<div class="feature mt-12">
    <div class="article-container article-container--feature">
      <article @php post_class() @endphp >
        <div class="max-w-screen-lg m-auto">
          <div class="mx-4">
            <h1 class="font-bold text-3xl lg:text-5xl text-center">
              @title
            </h1>
            <div class="font-bold mt-8 mb-4 text-xl max-w-screen-md m-auto text-center">
              @excerpt
            </div>
          </div>
          <div class="mb-4">
              {{ the_post_thumbnail('16-9_md', array('class' => 'thumbnail')) }}
          </div>
        </div>
        <div class="mx-4">
          @include('partials.single.common.author-date')
        </div>
        <div class="content m-auto">
        @content
        </div>
        <div class="max-w-screen-sm m-auto">
            @include('partials.single.common.share')
        </div>
        @include('partials.single.common.ours')
      </article>
    </div>
  </div>
  @include('partials.single.common.more')
  @include('partials.comments')