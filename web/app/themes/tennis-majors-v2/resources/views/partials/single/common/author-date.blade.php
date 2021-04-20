@php
    $author_avatar_url = get_avatar_url(get_the_author_meta('email'));
    $author_name = get_the_author_meta( 'first_name' )." ".get_the_author_meta( 'last_name' );
@endphp

<a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author">
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