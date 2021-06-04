@if(get_field('podcast_episode_id'))
    <div class="max-w-screen-lg m-auto">
        <div id='player' class="relative h-0 overflow-hidden pb-13/10 md:pb-52 md:pt-0 mx-12">
        <div class="art19-web-player awp-medium awp-theme-dark-orange" data-episode-id="@field('podcast_episode_id')"></div>
        </div>
    </div>
@endif