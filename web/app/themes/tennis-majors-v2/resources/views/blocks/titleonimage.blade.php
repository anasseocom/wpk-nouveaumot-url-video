{{--
  Title: Title on image
  Category: formatting
  Icon: admin-post
  Keywords: title
  Mode: edit
  Align: left
  PostTypes: page post videos
  SupportsAlign: full
  SupportsMode: false
  SupportsMultiple: true
--}}

@php
  $image = get_field('image');
@endphp

<div class="title-on-image">
    <div class="overlay"></div>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <h2 class="title">{{ the_field('title') }}</h2>
</div>