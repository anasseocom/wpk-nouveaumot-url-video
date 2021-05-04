{{--
  Template Name: Major Team
--}}

@extends('layouts.app')

@section('content')
@php
    $users = get_users()
@endphp
<div id="major-page" class="pt-20 pb-8relative">
    <div class="max-w-screen-xl m-auto">
        <h2 class="text-4xl uppercase text-black text-center pb-2 mx-4">{{ __('A major team', 'sage')}}</h2>
        <p class="font-bold text-center pb-8 mx-4">{{ __('The best tennis writer and experts are there', 'sage')}}</p>
    </div>
    <div class="mx-4">
        <div class="max-w-screen-xl m-auto border-b-2 border-black mt-12 pb-4 mb-4">
            <div class="uppercase">{{ __('Meet', 'sage') }} <span class="font-bold">{{ __('The figures', 'sage')}}</span></div>
        </div>
    </div>
    <div class="ml-4">
        <div id="major-team-slider">
            @foreach( $users as $user)
                @php
                    $id = $user->ID;
                    $user_is_major = get_field('user_is_major', 'user_'. $id);
                    $image = get_field('user_image', 'user_'. $id);
                    $first_name = get_user_meta( $id, 'first_name', true );
                    $last_name = get_user_meta( $id, 'last_name', true );
                @endphp

                @if($user_is_major)
                    <div class="user user--major">
                        <img src="{{ $image['url'] }}" class="absolute bottom-0 w-32 left-0">
                        <div class="w-screen pb-55/100">
                        </div>
                        <div class="bg-black rounded-lg absolute w-full h-bgmajorcard bottom-0 -z-1">
                        </div>
                        <h3 class="uppercase text-white text-xl absolute bottom-12 left-36">{{ $first_name }} </br><span class="font-bold text-xl">{{ $last_name }}</span></h3>
                        <a href="{{ get_author_posts_url($id) }}" class="text-xs uppercase underline text-white absolute bottom-6 right-6 link--arrow link--arrow-white link--arrow-right">{{ __('See content', 'sage')}}</a>
                    </div>
<<<<<<< HEAD
                @endif
            @endforeach
        </div>
    </div>
    <div class="max-w-screen-xl m-auto">
        <div class="mx-4">
            <div class="border-b-2 border-black mt-20 pb-4">
                <div class="uppercase">{{ __('Meet', 'sage') }} <span class="font-bold">{{ __('The figures', 'sage') }}</span></div>
            </div>
=======
                    <div class="bg-black rounded-lg absolute w-full h-bgmajorcard bottom-0 -z-1">
                    </div>
                    <h3 class="uppercase text-white text-xl text-center absolute bottom-8 left-1/2 transform -translate-x-1/2">{{ $first_name }} </br><span class="font-bold text-2xl">{{ $last_name }}</span></h3>
                    <a href="{{ get_author_posts_url($id) }}" class="text-xs uppercase underline text-white">See content</a>
                </div>
            @endif
        @endforeach
    </div>
    <div class="max-w-screen-xl m-auto">
        <div class="border-b-2 border-black mt-20 pb-4">
            <div class="uppercase">Meet <span class="font-bold">the figures</span></div>
>>>>>>> c279d078a9aa101942aa4ea500a1728ad6aa3bfe
        </div>
        <div class="grid grid-cols-4 gap-4 mt-4 mx-4">
        @foreach( $users as $user)
            @php
                $id = $user->ID;
                $user_is_major = get_field('user_is_major', 'user_'. $id);

                $author_avatar_url = get_avatar_url(get_the_author_meta('email'));
                $first_name = get_user_meta( $id, 'first_name', true );
                $last_name = get_user_meta( $id, 'last_name', true );
                $user_function = get_field('user_function', 'user_'. $id);
            @endphp
                @if(!$user_is_major)
                <div>
                    <div class="flex flex-row items-center my-6">
                      <div>
                          <img class="rounded-full w-20 flex" loading="lazy" src="{{ $author_avatar_url }}">
                      </div>
                      <div class="ml-4">
                        <div class="uppercase">{{ $first_name}} <span class="font-bold">{{$last_name }}</span></div>
                        <div class="uppercase font-bold text-xs mt-1">{{ $user_function }}</div>
<<<<<<< HEAD
                        <a href="{{ get_author_posts_url($id) }}" class="text-xs uppercase underline pl-0 link--arrow link--arrow-right">{{ __('Read articles', 'sage') }}</a>
=======
                        <a href="{{ get_author_posts_url($id) }}" class="text-xs uppercase underline">Read articles</a>
>>>>>>> c279d078a9aa101942aa4ea500a1728ad6aa3bfe
                      </div>
                    </div>
                </div>
                @endif
        @endforeach
        </div>
    </div>
</div>
@endsection
