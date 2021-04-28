@php
    global $post;
    $major_team_on_top = get_field('major_team_on_top');
@endphp
    <div id="major-team" class="max-w-screen-xl m-auto pt-20 pb-8 relative">
        <div class="m-auto">
            <h2 class="text-4xl uppercase text-black text-center pb-2">A major team</h2>
            <p class="font-bold text-center pb-8">The best tennis writer and experts are there</p>
        </div>
        <div id="major-team-slider">
            @foreach( $major_team_on_top as $user_id)
                @include('partials.common.author-major')
            @endforeach
        </div>
        <div class="flex flex-col items-center my-8">
            <a href="{{ get_permalink( get_page_by_path( 'major-team' ) )}}" class="btn btn--arrow-right">Discover all</a>
        </div>
    </div>