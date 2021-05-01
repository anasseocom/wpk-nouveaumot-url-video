<div id="menu" class="menu">
    <div class="w-full top-0 z-infinite bg-black">
        <div class="px-4 h-20 relative">
        </div>
    </div>
    <div class="menu-container px-4 flex flex-row items-center">
        <div class="max-w-screen-xl m-auto py-16 w-full">
            <div class="relative">
                @if (has_nav_menu('primary_navigation'))
                    <nav class="menu__primary" role="navigation" aria-label="Menu principal">
                        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu__list']) !!}
                    </nav>
                @endif
            </div>
        </div>
    </div>
</div>