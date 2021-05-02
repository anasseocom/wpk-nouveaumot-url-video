<footer id="footer" class="pb-20 sm:pb-0">
  <div class="max-w-screen-xl m-auto my-4 sm:mt-8 sm:mb-16">
    <div class="flex justify-between sm:grid sm:grid-cols-12 sm:gap-x-8 px-4">
      <div class="sm:col-span-2 max-w-logo flex items-center h-20">
        @include('partials.footer.logo')
      </div>
      <div class="hidden sm:flex sm:col-span-6 items-center h-20">
        @include('partials.footer.menu-copyright')
      </div>
      <div class="sm:col-span-3 flex items-center h-20">
        <div class="flex flex-col w-full items-end">
          @include('partials.footer.socials')
        </div>
      </div>
    </div>
  </div>
</footer>
