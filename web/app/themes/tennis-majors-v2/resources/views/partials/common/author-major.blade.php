@php
    $image = get_field('user_image', 'user_'. $user_id);
    $first_name = get_user_meta( $user_id, 'first_name', true );
    $last_name = get_user_meta( $user_id, 'last_name', true );
@endphp
<a href="{{ get_author_posts_url($user_id) }}" class="user user--major mb-4 group">
    <img src="{{ $image['url'] }}" class="absolute bottom-0 w-majoruser left-1/2 transform -translate-x-1/2">
    <div class="w-full pb-16/9 md:pb-12/10"></div>
    <div class="bg-black rounded-lg absolute w-full h-bgmajorcard bottom-0 -z-1 group-hover:shadow-lg transition-all ease"></div>
    <h3 class="uppercase text-white text-xl text-center absolute bottom-8 left-1/2 transform -translate-x-1/2">{{ $first_name }} </br><span class="font-bold text-2xl">{{ $last_name }}</span></h3>
</a>