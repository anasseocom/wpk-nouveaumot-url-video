@php
    global $wp_query;
    $author = $wp_query->get_queried_object();
    $id = $author->ID;
    $author_is_major = get_field('user_is_major', 'user_'. $id);
    $first_name = get_user_meta( $id, 'first_name', true );
    $last_name = get_user_meta( $id, 'last_name', true );
    $description = get_user_meta($id, 'description', true);
    $twitter = get_field('user_twitter', 'user_'. $id);
    $instagram = get_field('user_instagram', 'user_'. $id);
    $image = get_field('user_image', 'user_'. $id);
@endphp
<div class="bg-black text-white px-20">
    <div class="max-w-screen-xl m-auto pt-20">
        <a href="{{ get_permalink( get_page_by_path( 'major-team' ) )}}" class="uppercase text-xs">Back to the team</a>
    </div>
    <div class="max-w-screen-xl m-auto">
        <div class="grid grid-cols-12 gap-x-8">
            <div class="col-span-6 flex-col flex items-end">
                <img src="{{ $image['url'] }}" class="w-80">
            </div>
            <div class="col-span-6">
                <div>
                    @if ($twitter)
                        <div class="mx-0.5 w-14">
                            <a href="{{ $twitter }}" target="_blank">
                                @include('partials.images.socials.share-twitter')
                            </a>
                        </div>
                    @endif
                    @if ($instagram)
                        <div class="mx-0.5 w-14">
                            <a href="{{ $instagram }}" target="_blank">
                                @include('partials.images.socials.share-instagram')
                            </a>
                        </div>
                    @endif
                </div>
                <div>
                    <h1 class="uppercase text-6xl">
                        <span class="block">{{ $first_name }}</span>
                        <span class="font-bold block">{{ $last_name }}</span>
                    </h1>
                </div>
                <div class="mt-7">
                    {{ $description }} 
                </div>
            </div>
        </div>
    </div>

</div>