@php 
    $my_current_lang = apply_filters( 'wpml_current_language', NULL );
@endphp
<div class="w-full pb-20 mx-auto">
@if($my_current_lang =='fr')         
<a href="https://www.tenniswarehouse-europe.com/catpage-LACFSJUNE.html?from=kicker&vat=fr&lang=fr" rel="nofollow sponsored" target="_blank">
    <figure class="w-full h-auto">
        <img class="w-full h-auto" src="@asset('/images/images/ope-june/single-news-fr.jpg')" alt="">
    </figure>
</a>
@endif
@if($my_current_lang =='en')
<a href="https://www.tenniswarehouse-europe.com/catpage-LACFSJUNE.html?from=kicker&lang=en" rel="nofollow sponsored" target="_blank">
    <figure class="w-full h-auto">
        <img class="w-full h-auto" src="@asset('/images/ope-june/single-news-en.jpg')" alt="">
    </figure>
</a>
@endif
</div>