@php
  $author_avatar_url = get_avatar_url(get_the_author_meta('email'));
  $author_name = get_the_author_meta( 'first_name' )." ".get_the_author_meta( 'last_name' );
@endphp
<div class="px-4 mt-12">
  <div class="article-container max-w-screen-xl m-auto flex flex-col items-end">
    <article @php(post_class())>
      <h1 class="font-bold text-5xl max-w-screen-lg">
        {!! $title !!}
      </h1>
      <div class="grid grid-cols-12">
        <div class="font-bold mt-8 mb-4 text-lg col-span-8">
          {{ the_excerpt() }}
        </div>
      </div>
      <div class="grid grid-cols-12 gap-x-8">
        <div class="col-span-8">
          <div class="mb-4">
            @php(the_post_thumbnail('full', array('class' => 'thumbnail')))
          </div>
          <div>
            <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
              <div class="flex flex-row items-center my-6">
                <div>
                    <img class="rounded-full w-14 flex" loading="lazy" src="{{ $author_avatar_url }}">
                </div>
                <div class="ml-4">
                  <div class="font-bold">{{ $author_name }}</div>
                  <div class="text-black opacity-40 text-xs">{{ the_time('j F Y') }}</div>
                </div>
            </div>
            </a>
          </div>
          <div class="content">
            @php(the_content())
          </div>
          <div class="my-20">
            <div class="uppercase text-2xl">
              <span class="font-bold">Share</span> this story
            </div>
            <div class="flex -mx-1 mt-4">
              <a href="https://www.facebook.com/sharer/sharer.php?u={{ get_permalink() }}" class="text-z w-14 border-2 border-black mx-1">
                Facebook
                @include('partials.images.socials.share-facebook')
              </a>
              <a href="https://twitter.com/intent/tweet?url={{ get_permalink() }}" class="text-z w-14 border-2 border-black mx-1">
                Twitter
                @include('partials.images.socials.share-twitter')
              </a>
              <a href="https://www.linkedin.com/shareArticle?url={{ get_permalink() }}" class="text-z w-14 border-2 border-black mx-1">
                Linkedin
                @include('partials.images.socials.share-linkedin')
              </a>
              <a href="https://api.whatsapp.com/send?text={{ get_permalink() }}" class="text-z w-14 border-2 border-black mx-1">
                Whatsapp
                @include('partials.images.socials.share-whatsapp')
              </a>
              <a href="mailto:?subject=Tennis Majors : {!! $title !!}&body=Cet article vous est recommandé :%0D%0A%0D%0A{!! $title !!}%0D%0A{{ get_permalink() }}" class="text-z w-14 border-2 border-black mx-1">
                Email
                @include('partials.images.socials.share-email')
              </a>
              
            </div>
          </div>
        </div>
        <div class="col-span-4">Sidebar</div>
      </div>
    </article>
  </div>
</div>