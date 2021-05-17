@php
    $author_avatar_url = get_field('user_avatar', 'user_'.get_the_author_meta('ID'));
    $author_name = get_the_author_meta( 'first_name' )." ".get_the_author_meta( 'last_name' );
    $has_figures = get_field('video_has_figures');
    $users = get_users([
        'connected_type' => 'multiple_authors',
        'connected_items' => $post
        ] );
@endphp
  @if($users)
    <div class="max-w-screen-lg m-auto">
      <div class="grid grid-cols-12 py-2 scroll-mobile">
        <div class="col-span-12 md:grid md:grid-cols-3 md:gap-y-4 md:gap-x-10 scroll-mobile">
          @foreach( $users as $user)
            @php
              $user_id = $user->ID;
              $avatar_url = get_field('user_avatar', 'user_'. $user_id);
              $user_url = get_author_posts_url($user_id);
              $first_name = get_user_meta( $user_id, 'first_name', true );
              $last_name = get_user_meta( $user_id, 'last_name', true );
              $role = p2p_get_meta( $user->p2p_id, 'role', true );
            @endphp
            @if($role == 'Author' || $role == 'Auteur')
              <a href="{{ $user_url }}" class="grid gap-4 grid-cols-12 p-2">
                <div class="col-span-3 flex items-center">
                  <div class="w-full pb-1/1 relative">
                    <img class="rounded-full w-full h-full object-cover absolute top-0" alt="{{ __('Profile Picture of ', 'sage') }}{{ $last_name }}" loading="lazy" src="{{ $avatar_url['sizes']['1-1_sm'] }}">
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
              $user_url = get_author_posts_url($user_id);
              $first_name = get_user_meta( $user_id, 'first_name', true );
              $last_name = get_user_meta( $user_id, 'last_name', true );
              $role = p2p_get_meta( $user->p2p_id, 'role', true );
            @endphp
            @if($role == 'Writer' || $role == 'Rédacteur')
              <a href="{{ $user_url }}" class="grid gap-4 grid-cols-12 p-2">
                <div class="col-span-3 flex items-center">
                  <div class="w-full pb-1/1 relative">
                    <img class="rounded-full w-full h-full object-cover absolute top-0" alt="{{ __('Profile Picture of ', 'sage') }}{{ $last_name }}" loading="lazy" src="{{ $avatar_url['sizes']['1-1_sm'] }}">
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
              $user_url = get_author_posts_url($user_id);
              $first_name = get_user_meta( $user_id, 'first_name', true );
              $last_name = get_user_meta( $user_id, 'last_name', true );
              $role = p2p_get_meta( $user->p2p_id, 'role', true );
            @endphp
            @if($role == 'Co-writer' || $role == 'Co-rédacteur')
              <a href="{{ $user_url }}" class="grid gap-4 grid-cols-12 p-2">
                <div class="col-span-3 flex items-center">
                  <div class="w-full pb-1/1 relative">
                    <img class="rounded-full w-full h-full object-cover absolute top-0" alt="{{ __('Profile Picture of ', 'sage') }}{{ $last_name }}" loading="lazy" src="{{ $avatar_url['sizes']['1-1_sm'] }}">
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
@else
  <div class="max-w-screen-sm m-auto pb-8">
    <a href="@authorurl" rel="author">
      <div class="flex flex-row items-center my-6">
        <div>
            <img class="rounded-full w-10 md:w-14 flex" alt="{{ __('Profile Picture of ', 'sage') }}{{ $author_name }}" loading="lazy" src="{{ $author_avatar_url['sizes']['1-1_sm'] }}">
        </div>
        <div class="ml-4">
          <div class="font-bold">{{ $author_name }}</div>
          <div class="text-black opacity-40 text-xs">@include('partials.single.common.time-bilingue')</div>
        </div>
      </div>
    </a>
  </div>
@endif