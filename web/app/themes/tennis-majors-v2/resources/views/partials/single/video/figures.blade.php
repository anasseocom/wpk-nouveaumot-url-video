@php
    $has_figures = get_field('video_has_figures');
    $users = get_users([
        'connected_type' => 'multiple_authors',
        'connected_items' => $post
        ] );
@endphp
@if($has_figures)
@if($users)
<div class="px-4 bg-gray-200">
  <div class="max-w-screen-lg m-auto">
    <div class="grid grid-cols-12 py-2">
      <div class="col-span-2">
        <div class="uppercase mt-5">
        {{ __('The', 'sage') }} <span class="font-bold">{{ __('figures', 'sage') }}</span>
        </div>
      </div>
      <div class="col-span-10 grid grid-cols-3 gap-y-4 gap-x-10">
        @foreach( $users as $user)
          @php
            $user_id = $user->ID;
            $avatar_url = get_avatar_url(get_user_meta( $user_id, 'user_email', true ));
            $first_name = get_user_meta( $user_id, 'first_name', true );
            $last_name = get_user_meta( $user_id, 'last_name', true );
            $role = p2p_get_meta( $user->p2p_id, 'role', true );
          @endphp
          @if($role == 'Host')
            <div class="grid gap-4 grid-cols-12 p-2">
              <div class="col-span-3 relative">
                <div class="w-full pb-1/1"></div>
                <img class="rounded-full w-full h-full object-cover absolute top-0" loading="lazy" src="{{ $avatar_url }}">
              </div>
              <div class="col-span-9 flex items-center">
                <div>
                  <div class="uppercase">{{ $first_name }} <span class="font-bold">{{ $last_name }}</span></div>
                  <div class="uppercase text-xs">{{ $role }}</div>
                </div>
              </div>
            </div>
          @endif
        @endforeach
        @foreach( $users as $user)
          @php
            $user_id = $user->ID;
            $avatar_url = get_avatar_url(get_user_meta( $user_id, 'user_email', true ));
            $first_name = get_user_meta( $user_id, 'first_name', true );
            $last_name = get_user_meta( $user_id, 'last_name', true );
            $role = p2p_get_meta( $user->p2p_id, 'role', true );
          @endphp
          @if($role == 'Guest')
            <div class="grid gap-4 grid-cols-12 p-2">
              <div class="col-span-3 relative">
                <div class="w-full pb-1/1"></div>
                <img class="rounded-full w-full h-full object-cover absolute top-0" loading="lazy" src="{{ $avatar_url }}">
              </div>
              <div class="col-span-9 flex items-center">
                <div>
                  <div class="uppercase">{{ $first_name }} <span class="font-bold">{{ $last_name }}</span></div>
                  <div class="uppercase text-xs">{{ $role }}</div>
                </div>
              </div>
            </div>
          @endif
        @endforeach
        </div>
      </div>
    </div>
  </div>
@endif
@endif