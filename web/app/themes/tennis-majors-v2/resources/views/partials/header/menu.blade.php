<div id="menu" class="menu">
    <div class="w-full top-0 z-infinite bg-black">
        <div class="px-4 h-16 lg:h-20 relative"></div>
    </div>
    <div class="menu-container px-4 sm:flex sm:flex-row sm:items-center">
        <div class="max-w-screen-xl m-auto py-16 w-full">
            <div class="relative">
                <h2 class="uppercase text-xs text-white absolute left-1 -top-2 sm:-top-4 transform -translate-y-full">Menu</h2>
                @if (has_nav_menu('primary_navigation'))
                    <nav id="menu-primary" class="menu__primary" role="navigation" aria-label="Menu principal">
                        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu__list']) !!}
                    </nav>
                @endif
            </div>
        </div>
    </div>
</div>