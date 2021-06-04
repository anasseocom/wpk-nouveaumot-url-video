@if(get_field('podcast_episode_id'))
    <div class="max-w-screen-lg m-auto">
        <div id='player' class="relative h-0 overflow-hidden pb-16/9">
        <div class="art19-medium art-19-web-player awp-theme-dark-orange" data-episode-id="@field('podcast_episode_id')"></div>
        </div>
    </div>
@endif