@php
    $has_figures = get_field('video_has_figures');
    $users = get_users([
        'connected_type' => 'multiple_authors_videos',
        'connected_items' => $post
        ] );
@endphp
@if($has_figures)
  @if($users)
    <div class="px-4 bg-gray-200">
      <div class="max-w-screen-lg m-auto">
        <div class="md:grid md:grid-cols-12 py-2 scroll-mobile">
          <div class="col-span-2 mr-4 md:mr-0 flex items-center">
            <div class="uppercase ">
            {{ __('The', 'sage') }} <span class="font-bold">{{ __('figures', 'sage') }}</span>
            </div>
          </div>
          <div class="col-span-10 flex md:grid md:grid-cols-3 md:gap-y-4 md:gap-x-10">
            @foreach( $users as $user)
              @php
                $user_id = $user->ID;
                $avatar = get_field('user_avatar', 'user_'. $user_id);
                $first_name = get_user_meta( $user_id, 'first_name', true );
                $last_name = get_user_meta( $user_id, 'last_name', true );
                $role = p2p_get_meta( $user->p2p_id, 'role', true );
              @endphp
              @if($role == 'Host')
                <a href="{{ get_author_posts_url($user_id) }}" class="grid gap-4 grid-cols-12 p-2">
                  <div class="col-span-3 flex items-center">
                    <div class="w-full pb-1/1 relative">
                      <img class="rounded-full w-full h-full object-cover absolute top-0"alt="{{ __('Profile Picture of ', 'sage') }}{{ $last_name }}" loading="lazy"  loading="lazy" src="{{ $avatar['sizes']['1-1_sm'] }}">
                    </div>
                  </div>
                  <div class="col-span-9 flex items-center">
                    <div>
                      <div class="uppercase">{{ $first_name }} <span class="font-bold">{{ $last_name }}</span></div>
                      <div class="uppercase text-xs">{{ $role }}</div>
                    </div>
                  </div>
                </a>
              @endif
            @endforeach
            @foreach( $users as $user)
              @php
                $user_id = $user->ID;
                $avatar_url = get_field('user_avatar', 'user_'. $user_id);
                $first_name = get_user_meta( $user_id, 'first_name', true );
                $last_name = get_user_meta( $user_id, 'last_name', true );
                $role = p2p_get_meta( $user->p2p_id, 'role', true );
              @endphp
              @if($role == 'Guest')
                <a href="{{ get_author_posts_url($user_id) }}" class="grid gap-4 grid-cols-12 p-2">
                  <div class="col-span-3 flex items-center">
                    <div class="w-full pb-1/1 relative">
                      <img class="rounded-full w-full h-full object-cover absolute top-0" alt="{{ __('Profile Picture of ', 'sage') }}{{ $last_name }}" loading="lazy" src="{{ $avatar['sizes']['1-1_sm'] }}">
                    </div>
                  </div>
                  <div class="col-span-9 flex items-center">
                    <div>
                      <div class="uppercase">{{ $first_name }} <span class="font-bold">{{ $last_name }}</span></div>
                      <div class="uppercase text-xs">{{ $role }}</div>
                    </div>
                  </div>
                </a>
              @endif
            @endforeach
            </div>
          </div>
        </div>
      </div>
  @endif
@else
<div class="px-4 bg-gray-200">
  <div class="max-w-screen-lg m-auto">
    <div class="grid grid-cols-12 py-2">
      <div class="col-span-12 grid grid-cols-3 gap-y-4 gap-x-10">
          @php
            $avatar = get_field('user_avatar', 'user_'.get_the_author_meta('ID'));
            $first_name = get_the_author_meta( 'first_name' );
            $last_name = get_the_author_meta( 'last_name' );
          @endphp
            <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" class="grid gap-4 grid-cols-12 p-2">
              <div class="col-span-3 flex items-center">
                <div class="w-full pb-1/1 relative">
                  <img class="rounded-full w-full h-full object-cover absolute top-0" alt="{{ __('Profile Picture of ', 'sage') }}{{ $last_name }}" loading="lazy" src="{{ $avatar['sizes']['1-1_sm'] }}">
                </div>
              </div>
              <div class="col-span-9 flex items-center">
                <div>
                  <div class="uppercase">{{ $first_name }} <span class="font-bold">{{ $last_name }}</span></div>
                </div>
              </div>
            </a>
        </div>
      </div>
    </div>
  </div>
@endif