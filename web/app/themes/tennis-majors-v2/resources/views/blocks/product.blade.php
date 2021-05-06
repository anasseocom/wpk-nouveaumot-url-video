{{--
  Title: Product
  Category: formatting
  Icon: format-aside
  Keywords: product
  Mode: edit
  Align: left
  PostTypes: page post videos
  SupportsAlign: full
  SupportsMode: false
  SupportsMultiple: true
--}}

<div class="px-4 my-10">
  <div class="grid grid-cols-1 gap-y-6 max-w-screen-sm rounded-xl shadow-lg">
        <div class="grid grid-cols-2 gap-x-6">
            <div class="col-span-2 sm:col-span-1 relative">
                <div class="relative w-full pb-16/9">
                  <img src="@field('product_image', 'url')" class="absolute object-cover w-full h-full">
                </div>
            </div>
            <div class="col-span-2 sm:col-span-1 flex items-center">
              <div class="p-4">
                <div class="uppercase text-lg"><span class="italic">Get the</span> <span class="font-bold">@field('product_name')</span></div>
                <div class="uppercase"><span class="font-bold">@field('product_price')</span> <span class="text-xs">(suggested price)</span></div>
                <div class="my-6">
                  <a href="@field('product_url')" target="_blank" class="btn btn--cta btn--cta-shop">
                    Shop now
                  </a>
                </div>
              </div>
            </div>
        </div>
  </div>
</div>