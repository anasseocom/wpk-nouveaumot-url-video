<header class="shadow-header sticky w-full top-0 z-infinite bg-white menu--active">
  <div class="px-4 h-16 lg:h-20 relative">
    <div class="flex flex-row max-w-screen-xl w-full m-auto relative justify-end lg:justify-between">
      <div class="logo-container absolute transform -translate-y-1/2 top-1/2 left-0 lg:transform lg:-translate-x-2/4 lg:-translate-y-2/4 lg:left-1/2 lg:top-1/2 z-100">
        @include('partials.header.logo')
      </div>
      <div class="hidden lg:flex lg:items-center lg:h-20">
        @include('partials.header.socials')
      </div>
      <div class="flex">
        @include('partials.header.nav')
      </div>
    </div>
  </div>
  @include('partials.header.menu')
  @include('partials.header.live-last-news')
  @include('partials.header.menu-thumbs')
</header>