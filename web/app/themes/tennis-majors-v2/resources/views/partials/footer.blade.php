<footer id="footer">
  <div class="max-w-screen-xl m-auto mt-8 mb-16">
    <div class="grid grid-cols-12 gap-x-8">
      <div class="col-span-2 flex items-center h-20">
        @include('partials.footer.logo')
      </div>
      <div class="col-span-6 col-start-4 flex items-center h-20">
        @include('partials.footer.menu-copyright')
      </div>
      <div class="col-span-3 flex items-center h-20">
        <div class="flex flex-col w-full items-end">
          @include('partials.footer.socials')
        </div>
      </div>
    </div>
  </div>
</footer>
