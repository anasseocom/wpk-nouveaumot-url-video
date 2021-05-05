{{--
  Title: Brand
  Category: formatting
  Icon: format-aside
  Keywords: brand
  Mode: edit
  Align: left
  PostTypes: page post videos
  SupportsAlign: full
  SupportsMode: false
  SupportsMultiple: true
--}}

<div class="px-4 my-10">
    <div class="p-8 max-w-screen-sm rounded-xl shadow-lg">
        <div class="grid grid-cols-2 mb-4">
            <div>
                <div class="uppercase text-xs">About the brand</div>
                <div class="uppercase text-2xl font-bold">@field('brand_title')</div>
            </div>
            <div class="flex flex-col  items-end">
                <img src="@field('brand_image', 'url')">
            </div>
        </div>
        <div>@field('brand_description')</div>
        <div class="mt-8 mb-4">
            <a href="@field('brand_url')" target="_blank" class="btn btn--cta btn--arrow-right">
            Visit brand website
            </a>
        </div>
    </div>
</div>