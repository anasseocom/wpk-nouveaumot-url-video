@php
    global $wp_query;
    $author = $wp_query->get_queried_object();
    $id = $author->ID;
    $author_is_major = get_field('user_is_major', 'user_'. $id);
    $author_avatar_url = get_field('user_avatar', 'user_'. get_the_author_meta('ID'));
    $first_name = get_user_meta( $id, 'first_name', true );
    $last_name = get_user_meta( $id, 'last_name', true );
    $description = get_user_meta($id, 'description', true);
    $twitter = get_field('user_twitter', 'user_'. $id);
    $instagram = get_field('user_instagram', 'user_'. $id);
    $post_on_top = get_field('user_post_on_top', 'user_'. $id);
    $my_current_lang = apply_filters( 'wpml_current_language', NULL );
@endphp
<div>
    <div class="px-4">
        <div class="max-w-screen-xl m-auto pt-20">
        @if($my_current_lang =='fr')
        <a href="{{ get_permalink( get_page_by_path( 'dream-team' ) )}}" class="uppercase text-xs link--arrow link--arrow-left">{{ __('Back to the team', 'sage') }}</a>
                        @endif
                        @if($my_current_lang =='en')
                        <a href="{{ get_permalink( get_page_by_path( 'major-team' ) )}}" class="uppercase text-xs link--arrow link--arrow-left">{{ __('Back to the team', 'sage') }}</a>

                        @endif
        </div>
        <div class="text-center flex-col flex items-center">
            <img class="rounded-full w-48 flex mt-3" loading="lazy" src="{{ $author_avatar_url }}">
            <div  class="flex my-4">
                @if ($twitter)
                    <div class="mx-0.5 w-8">
                        <a href="{{ $twitter }}" target="_blank">
                            @include('partials.images.socials.twitter-black-on-white')
                        </a>
                    </div>
                @endif
                @if ($instagram)
                    <div class="mx-0.5 w-8">
                        <a href="{{ $instagram }}" target="_blank">
                            @include('partials.images.socials.instagram-black-on-white')
                        </a>
                    </div>
                @endif
            </div>
            <div class="flex items-center max-w-screen-sm mb-3">
                {{ $description }} 
            </div>
        </div>
        @if($post_on_top)
            <div class="mt-10 max-w-screen-lg m-auto">
                <a href="{{ the_permalink() }}">
                    <h2 class="uppercase">{{ __('Recommended ', 'sage') }} <span class="font-bold">{{ __('by the writer', 'sage') }}</span></h2>
                    <div class="grid grid-cols-12 gap-8 mt-6">
                        @php
                            setup_postdata($post_on_top);
                        @endphp
                        <div class="col-span-12 md:col-span-8">
                            {{ the_post_thumbnail('16-9_md') }}
                        </div>
                        <div class="col-span-12 md:col-span-4">
                            <div class="text-xs">{{ the_time('j F Y') }}</div>
                            <h3 class="font-bold text-xl my-2">{{ the_title() }}</h3>
                            @if(has_excerpt())
                                <div class="mb-5">{{ wp_trim_words( get_the_excerpt(), 13, '...' ) }}</div>
                            @endif
                            @include('partials.common.author')
                        </div>
                        @php wp_reset_postdata() @endphp
                    </div>
                </a>
            </div>
        @endif

        <div class="mt-20 max-w-screen-lg m-auto">
            <h2 class="uppercase">{{ __('Last', 'sage') }} <span class="font-bold">articles</span></h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-x-8 gap-y-16 mt-6 mb-28">
                @posts
                    @include('partials.common.preview-author')
                @endposts
            </div>
            <div class="max-w-screen-xl m-auto">
                <?php pagination(); ?>
            <div>
        </div>
    </div>
</div>