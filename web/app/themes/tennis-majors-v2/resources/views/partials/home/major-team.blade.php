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
                @include('partials.common.author-major')
            @endforeach
        </div>
        <div class="flex flex-col items-center my-8">
            <a href="" class="btn btn--black">Meet the team</a>
        </div>
    </div>