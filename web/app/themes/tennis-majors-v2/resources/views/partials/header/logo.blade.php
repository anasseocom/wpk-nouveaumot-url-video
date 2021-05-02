@if ( is_front_page() )
    <h1 id="logo" class="text-z max-w-logo lg:max-w-logo-large">
        <a href="{{ home_url('/') }}">
            {{ get_bloginfo('name') }}
            @include('partials.images.logo')
        </a>
    </h1>
@else
    <div id="logo" class="text-z max-w-logo lg:max-w-logo-large">
        <a href="{{ home_url('/') }}">
        {{ get_bloginfo('name') }}
            @include('partials.images.logo')
        </a>
    </div>
@endif