<div class="feature mt-12">
    <div class="article-container article-container--feature max-w-screen-xl m-auto">
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
              {{ the_post_thumbnail('full', array('class' => 'thumbnail')) }}
          </div>
        </div>
        <div class="mx-4">
          <div class="max-w-screen-sm m-auto">
            @include('partials.single.common.author-date')
          </div>
        </div>
        <div class="content m-auto">
        @content
        </div>
        <div class="max-w-screen-sm m-auto">
            @include('partials.single.common.share')
        </div>
        <div>
          @include('partials.single.common.ours')
        </div>
      </article>
    </div>
  </div>
  @include('partials.single.common.more')
  @include('partials.comments')