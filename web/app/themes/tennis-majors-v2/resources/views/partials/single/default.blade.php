<div class="px-4 mt-12">
  <div class="article-container max-w-screen-xl m-auto flex flex-col items-end">
    <article @php post_class() @endphp >
      <h1 class="font-bold text-5xl max-w-screen-lg">
      @title
      </h1>
      <div class="grid grid-cols-12">
        <div class="font-bold mt-8 mb-4 text-lg col-span-8">
        @excerpt
        </div>
      </div>
      <div class="grid grid-cols-12 gap-x-8">
        <div class="col-span-8">
          <div class="mb-4">
            {{ the_post_thumbnail('full', array('class' => 'thumbnail')) }}
          </div>
          <div>
            @include('partials.single.common.author-date')
          </div>
          <div class="content">
          @content
          </div>
          @include('partials.single.common.share')
        </div>
        <div class="col-span-4">Sidebar</div>
      </div>
    </article>
  </div>
</div>
@include('partials.single.common.more')
@include('partials.comments')