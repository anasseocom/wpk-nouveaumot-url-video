{{--
  Template Name: Major Team
--}}

@extends('layouts.app')

@section('content')
@php
    $users = get_users()
@endphp
<div id="major-team" class="pt-20 pb-8 pl-4 relative">
    <div class="max-w-screen-xl m-auto">
        <h2 class="text-4xl uppercase text-black text-center pb-2">A major team</h2>
        <p class="font-bold text-center pb-8">The best tennis writer and experts are there</p>
    </div>
    <div class="max-w-screen-xl m-auto border-b-2 border-black mt-12 pb-4 mb-8">
        <div class="uppercase">Meet <span class="font-bold">the figures</span></div>
    </div>
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
                    <img src="{{ $image['url'] }}" class="absolute bottom-0 w-majoruser left-1/2 transform -translate-x-1/2">
                    <div class="w-full pb-majoruser">
                    </div>
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
        </div>
        @foreach( $users as $user)
            @php
                $id = $user->ID;
                $user_is_major = get_field('user_is_major', 'user_'. $id);

                $author_avatar_url = get_avatar_url(get_the_author_meta('email'));
                $first_name = get_user_meta( $id, 'first_name', true );
                $last_name = get_user_meta( $id, 'last_name', true );
                $user_function = get_field('user_function', 'user_'. $id);
            @endphp
            <div class="grid grid-cols-4 gap-4 mt-8">
                @if(!$user_is_major)
                <div>
                    <div class="flex flex-row items-center my-6">
                      <div>
                          <img class="rounded-full w-20 flex" loading="lazy" src="{{ $author_avatar_url }}">
                      </div>
                      <div class="ml-4">
                        <div class="uppercase">{{ $first_name}} <span class="font-bold">{{$last_name }}</span></div>
                        <div class="uppercase font-bold text-xs mt-1">{{ $user_function }}</div>
                        <a href="{{ get_author_posts_url($id) }}" class="text-xs uppercase underline">Read articles</a>
                      </div>
                    </div>
                </div>
                @endif
            </div>
        @endforeach
    </div>
</div>
@endsection
