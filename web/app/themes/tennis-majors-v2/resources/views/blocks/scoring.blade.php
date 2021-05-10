{{--
  Title: Results
  Category: formatting
  Icon: admin-post
  Keywords: results
  Mode: edit
  Align: left
  PostTypes: page post videos
  SupportsAlign: full
  SupportsMode: false
  SupportsMultiple: false
--}}

@php
  global $post;

@endphp

<div class="read-also pb-2 pt-4">
  <div class="uppercase mb-6 font-bold">
    @field('scoring_title')
  </div>
  <div class="grid gap-y-4">
    <div class="grid grid-cols-12 gap-x-4">
      <div class="col-span-6 grid grid-cols-12 gap-x-4">
        <div class="col-span-4 sm:col-span-3 lg:col-span-2 flex items-center">
          <img src="@field('player_1_image')" class="rounded-full overflow-hidden">
        </div>
        <div class="col-span-8 sm:col-span-9 lg:col-span-10  flex flex-row items-center">
          <div>
            <div class="uppercase font-bold text-sm sm:text-base">@field('player_1_name')</div>
            <div class="uppercase text-sm font-bold">@field('player_1_rank')</div>
          </div>
        </div>
      </div>
      <div class="col-span-6 flex items-center">
        <div class="grid grid-cols-5 w-full font-bold">
          <div class="col-span-1">@field('player_1_set_1')</div>
          <div class="col-span-1">@field('player_1_set_2')</div>
          <div class="col-span-1">@field('player_1_set_3')</div>
          <div class="col-span-1">@field('player_1_set_4')</div>
          <div class="col-span-1">@field('player_1_set_5')</div>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-12 gap-x-4">
      <div class="col-span-6 grid grid-cols-12 gap-x-4">
        <div class="col-span-4 sm:col-span-3 lg:col-span-2 flex items-center">
          <img src="@field('player_2_image')" class="rounded-full overflow-hidden">
        </div>
        <div class="col-span-8 sm:col-span-9 lg:col-span-10 flex flex-row items-center">
          <div>
            <div class="uppercase font-bold text-sm sm:text-base">@field('player_2_name')</div>
            <div class="uppercase text-sm font-bold">@field('player_2_rank')</div>
          </div>
        </div>
      </div>
      <div class="col-span-6 flex items-center">
        <div class="grid grid-cols-5 w-full font-bold">
          <div class="col-span-1">@field('player_2_set_1')</div>
          <div class="col-span-1">@field('player_2_set_2')</div>
          <div class="col-span-1">@field('player_2_set_3')</div>
          <div class="col-span-1">@field('player_2_set_4')</div>
          <div class="col-span-1">@field('player_2_set_5')</div>
        </div>
      </div>
    </div>
  </div>
</div>