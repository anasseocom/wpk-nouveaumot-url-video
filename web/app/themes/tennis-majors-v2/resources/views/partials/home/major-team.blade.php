@php
    global $post;
    $major_team_on_top = get_field('major_team_on_top');
@endphp
    <div id="major-team" class="pt-20 pb-8 pl-4 relative">
        <div class="max-w-screen-lg m-auto">
            <h2 class="text-4xl uppercase text-black text-center pb-2">A major team</h2>
            <p class="font-bold text-center pb-8">The best tennis writer and experts are there</p>
        </div>
        <div id="major-team-slider">
            @foreach( $major_team_on_top as $user_id)
                @php
                    $image = get_field('user_image', 'user_'. $user_id);
                    $first_name = get_user_meta( $user_id, 'first_name', true );
                    $last_name = get_user_meta( $user_id, 'last_name', true );
                @endphp
                <div class="relative">
                    <img src="{{ $image['url'] }}" class="absolute bottom-0 w-majoruser left-1/2 transform -translate-x-1/2">
                    <div class="w-full pb-majoruser">
                    </div>
                    <div class="bg-black rounded-lg absolute w-full h-bgmajorcard bottom-0 -z-1">
                    </div>
                    <h3 class="uppercase text-white text-xl text-center absolute bottom-8 left-1/2 transform -translate-x-1/2">{{ $first_name }} </br><span class="font-bold text-2xl">{{ $last_name }}</span></h3>
                </div>
            @endforeach
        </div>
        <div class="flex flex-col items-center my-8">
            <a href="" class="btn btn--black">Meet the team</a>
        </div>
    </div>