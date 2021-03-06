@php
    $author_avatar = get_field('user_avatar', 'user_'. get_the_author_meta('ID'));
    $author_name = get_the_author_meta( 'first_name' )." ".get_the_author_meta( 'last_name' );
@endphp

<div class="flex flex-row items-center mt-4">
    <div>
        <img class="rounded-full w-6 flex" alt="{{ __('Profile Picture of ', 'sage') }}{{ $author_name }}" loading="lazy" src="{{ $author_avatar['sizes']['1-1_sm'] }}">
    </div>
    <div class="ml-2 uppercase text-xs">{{ $author_name }}</div>
</div>