@if (!empty(get_option( 'instagram_url')))
    <div id="header-socials" class="flex flex-row -mx-0.5">
        @if (!empty(get_option( 'facebook_url')))
            <div class="mx-0.5">
                <a href="{{ get_option( 'facebook_url' ) }}" target="_blank">
                    @include('partials.images.socials.facebook')
                </a>
            </div>
        @endif
        @if (!empty(get_option( 'twitter_url')))
            <div class="mx-0.5">
                <a href="{{ get_option( 'twitter_url' ) }}" target="_blank">
                    @include('partials.images.socials.twitter')
                </a>
            </div>
        @endif
        @if (!empty(get_option( 'instagram_url')))
            <div class="mx-0.5">
                <a href="{{ get_option( 'instagram_url' ) }}" target="_blank">
                    @include('partials.images.socials.instagram')
                </a>
            </div>
        @endif
    </div>
@endif