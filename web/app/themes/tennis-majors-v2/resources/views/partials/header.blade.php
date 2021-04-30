<header class="shadow-header sticky w-full top-0 z-infinite bg-white">
  <div class="px-4 h-20 relative">
    <div class="flex flex-row max-w-screen-xl m-auto justify-between">
      <div class="absolute transform -translate-x-2/4 -translate-y-2/4 left-1/2 top-1/2 z-100">
        @include('partials.header.logo')
      </div>
      <div class="flex items-center h-20">
        @include('partials.header.socials')
      </div>
      <div class="flex">
        @include('partials.header.nav')
      </div>
    </div>
  </div>
  @include('partials.header.live-last-news')
</header>