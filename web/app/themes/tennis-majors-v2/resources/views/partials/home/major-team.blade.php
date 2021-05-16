@php
    global $post;
    $major_team_on_top = get_field('major_team_on_top', 'option');
    $my_current_lang = apply_filters( 'wpml_current_language', NULL );
@endphp
@if($major_team_on_top)
    <div id="major-team" class="max-w-screen-xl m-auto pt-20 pb-8 relative">
        <div class="m-auto">
            <h2 class="text-4xl uppercase text-black text-center pb-2">{{ __('A major', 'sage')}}  <span class="font-bold">{{ __('team', 'sage')}}</span></h2>
            <p class="text-center pb-8">{{ __('The best tennis writer and experts are there', 'sage')}}</p>
        </div>
        <div class="relative">
            <div id="major-team--arrow-left" class="absolute z-10 shadow-lg rounded-full cursor-pointer transform -translate-y-1/2 top-1/2 w-16 left-4 cursor-pointer">
                @include('partials.images.slider-arrow-left')
            </div>
            <div id="major-team--arrow-right" class="absolute z-10 shadow-lg rounded-full cursor-pointer transform -translate-y-1/2 top-1/2 w-16 right-4 cursor-pointer">
                @include('partials.images.slider-arrow-right')
            </div>
            <div id="major-team-slider">
                @foreach( $major_team_on_top as $user_id)
                    @include('partials.common.author-major')
                @endforeach
            </div>
        </div>
        <div class="flex flex-col items-center mb-12">
            @if($my_current_lang =='fr')
                <a href="{{ get_permalink( get_page_by_path( 'dream-team' ) )}}" class="btn btn--arrow-right">{{ __('Discover all', 'sage') }}</a>
            @endif
            @if($my_current_lang =='en')
                <a href="{{ get_permalink( get_page_by_path( 'major-team' ) )}}" class="btn btn--arrow-right">{{ __('Discover all', 'sage') }}</a>
            @endif
        </div>
    </div>
@endif