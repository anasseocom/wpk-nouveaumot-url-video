@php
    $author_avatar_url = get_field('user_avatar', 'user_'.get_the_author_meta('ID'));
    $author_name = get_the_author_meta( 'first_name' )." ".get_the_author_meta( 'last_name' );
@endphp

<div class="flex flex-row items-center mt-4">
    <div>
        <img class="rounded-full w-6 flex" loading="lazy" src="{{ $author_avatar_url }}">
    </div>
    <div class="ml-2 uppercase text-xs">{{ $author_name }}</div>
</div>