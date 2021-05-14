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
  SupportsMultiple: true
--}}

@php
  global $post;
  $player_1 = get_term(get_field('player_1')[0]);
  $player_2 = get_term(get_field('player_2')[0]);
@endphp

<div class="read-also pb-2 pt-4">
  <div class="uppercase mb-6 font-bold">
    @field('scoring_title')
  </div>
  <div class="grid gap-y-4">
    <div class="grid grid-cols-12 gap-x-4">
      <div class="col-span-6 grid grid-cols-12 gap-x-4">
        <div class="col-span-4 sm:col-span-3 lg:col-span-2 flex items-center">
          <div class="relative h-0 pb-1/1 rounded-full overflow-hidden w-full">
            <img src="{{ the_field('image', $player_1)}}" class="image-player">
          </div>
        </div>
        <div class="col-span-8 sm:col-span-9 lg:col-span-10  flex flex-row items-center">
          <div>
            <div class="uppercase font-bold text-sm sm:text-base">{{ $player_1->name }}</div>
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
          <div class="relative h-0 pb-1/1 rounded-full overflow-hidden w-full">
            <img src="{{ the_field('image', $player_2)}}" class="image-player">
          </div>
        </div>
        <div class="col-span-8 sm:col-span-9 lg:col-span-10 flex flex-row items-center">
          <div>
            <div class="uppercase font-bold text-sm sm:text-base">{{ $player_2->name }}</div>
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