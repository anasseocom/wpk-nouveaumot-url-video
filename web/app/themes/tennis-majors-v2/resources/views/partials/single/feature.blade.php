<div class="feature px-4 mt-12">
    <div class="article-container article-container--feature max-w-screen-xl m-auto">
      <article @php post_class() @endphp >
        <div class="max-w-screen-lg m-auto">
            <h1 class="font-bold text-5xl text-center">
              @title
            </h1>
            <div class="font-bold mt-8 mb-4 text-lg max-w-screen-md m-auto text-center">
              @excerpt
            </div>
            <div class="mb-4">
                {{ the_post_thumbnail('full', array('class' => 'thumbnail')) }}
            </div>
        </div>
        <div class="max-w-screen-sm m-auto">
            @include('partials.single.common.author-date')
        </div>
        <div class="content prose m-auto">
        @content
        </div>
        <div class="max-w-screen-sm m-auto">
            @include('partials.single.common.share')
        </div>
      </article>
    </div>
  </div>
  @include('partials.single.common.more')
  @include('partials.comments')