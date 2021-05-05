<div>
    @if (has_nav_menu('footer_navigation'))
        <div class="text-xs">
            <nav role="navigation" aria-label="Menu Footer">
                {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'menu__list']) !!}
            </nav>
        </div>
    @endif
    <div class="text-black opacity-40 mt-2 text-xs">
    {{ __('©Tennis Majors 2021 | All  right reserved', 'sage') }}
        
    </div>
</div>