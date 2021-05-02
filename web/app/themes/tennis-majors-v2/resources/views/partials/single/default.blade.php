<div class="px-4 mt-12">
  <div class="article-container article-container--default max-w-screen-xl m-auto flex flex-col items-end">
    <article @php post_class() @endphp >
      <h1 class="font-bold text-3xl md:text-5xl max-w-screen-lg">
      @title
      </h1>
      <div class="grid grid-cols-12">
        <div class="font-bold mt-4 md:mt-8 mb-4 text-lg col-span-12  md:col-span-8">
          @excerpt
        </div>
      </div>
      <div class="grid grid-cols-12 gap-x-8">
        <div class="col-span-12 md:col-span-8">
          <div class="mb-4">
            {{ the_post_thumbnail('full', array('class' => 'thumbnail')) }}
          </div>
          <div>
            @include('partials.single.common.author-date')
          </div>
          <div class="content max-w-none">
            @content
          </div>
          @include('partials.single.common.share')
        </div>
        <div class="hidden md:block md:col-span-4">
          @include('partials.common.newsletter-form')
        </div>
      </div>
    </article>
  </div>
</div>
@include('partials.single.common.more')
@include('partials.comments')