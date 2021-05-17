@php
    $image = get_field('user_image', 'user_'. $user_id);
    $first_name = get_user_meta( $user_id, 'first_name', true );
    $last_name = get_user_meta( $user_id, 'last_name', true );
@endphp
<a href="{{ get_author_posts_url($user_id) }}" class="user user--major mb-4 group transform hover:-translate-y-1 transition-all  ease duration-200">
    <div class="h-32 w-full absolute rounded-lg bottom-0 bg-gradient-to-t from-black to-transparent opacity-90 z-10"></div>
    
    <img src="{{ $image['url'] }}" alt="{{ __('Profile Picture of ', 'sage') }}{{ $last_name }}" class="absolute bottom-0 w-majoruser left-1/2 transform -translate-x-1/2">
    <div class="w-full padding-major"></div>
    <div class="bg-black rounded-lg absolute w-full h-bgmajorcard bottom-0 -z-1 group-hover:shadow-xl transition-all transform ease duration-200"></div>
    <h3 class="uppercase text-white text-xl text-center absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20">{{ $first_name }} </br><span class="font-bold text-2xl">{{ $last_name }}</span></h3>
</a>