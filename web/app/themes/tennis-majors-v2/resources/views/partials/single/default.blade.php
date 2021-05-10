<article @php post_class() @endphp >
  <div class="mt-8 sm:mt-12">
    <div class="article-container article-container--default max-w-screen-xl m-auto flex flex-col items-end">
      <div class="md:max-w-article-default">
        <h1 class="font-bold text-3xl md:text-5xl max-w-screen-lg px-4">
          @title
        </h1>
        <div class="grid grid-cols-12">
          <div class="font-bold mt-4 md:mt-8 mb-4 text-lg col-span-12  md:col-span-8 px-4">
            @excerpt
          </div>
        </div>
        <div class="grid grid-cols-12 gap-x-8">
          <div class="col-span-12 md:col-span-8">
            <div class="mb-4 mx-4">
              {{ the_post_thumbnail('16-9_md', array('class' => 'thumbnail')) }}
            </div>
            <div class="mx-4">
              @include('partials.single.common.author-date')
            </div>
            <div class="content max-w-none">
              @content
            </div>
            @include('partials.single.common.share')
            <div>
            </div>
          </div>
          <div class="hidden md:block md:col-span-4">
            @include('partials.common.newsletter-form')
          </div>
        </div>
      </div>
    </div>
    @include('partials.single.common.ours')
  </div>
</article>
@include('partials.single.common.more')
@include('partials.comments')