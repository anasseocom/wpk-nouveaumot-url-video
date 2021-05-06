@php
    $users = get_users([
        'connected_type' => 'multiple_authors',
        'connected_items' => $post
        ] );
@endphp
@if($users)
    <div class="px-4 bg-gray-200 py-10">
        <div class="max-w-screen-lg m-auto">
            <div class="col-span-2">
            <div class="uppercase mt-5 mb-3">
                <span class="font-bold">CREDITS</span>
            </div>
            </div>
            <div class="grid grid-cols-12 py-2">
                <div class="col-span-10 grid grid-cols-3 gap-y-14 gap-x-10">
                    @foreach( $users as $user)
                    @php
                        $user_id = $user->ID;
                        $first_name = get_user_meta( $user_id, 'first_name', true );
                        $last_name = get_user_meta( $user_id, 'last_name', true );
                        $role = p2p_get_meta( $user->p2p_id, 'role', true );
                    @endphp
                    @if($role != 'Host' || $role != 'Guest')
                        <a href="{{ get_author_posts_url($user_id) }}" class="grid gap-2 grid-cols-12 gap-x-3">
                            <div class="col-span-12 flex items-center">
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