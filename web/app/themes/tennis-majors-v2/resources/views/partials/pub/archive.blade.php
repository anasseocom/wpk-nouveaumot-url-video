@php 
    $my_current_lang = apply_filters( 'wpml_current_language', NULL );
@endphp
<div class="w-full py-4 mx-auto text-center">
@if($my_current_lang =='fr')         
<a class="inline-block" href="https://www.tenniswarehouse-europe.com/catpage-RGA.html?from=kicker&vat=fr&lang=fr" rel="nofollow sponsored" target="_blank">
    <figure class="w-full h-auto">
        <img class="w-full h-auto" src="@asset('/images/images/ope-june/cat-news-fr.jpg')" alt="">
    </figure>
</a>
@endif
@if($my_current_lang =='en')
<a class="inline-block" href="https://www.tenniswarehouse-europe.com/catpage-RGA.html?from=kicker&lang=en" rel="nofollow sponsored" target="_blank">
    <figure class="w-full h-auto">
        <img class="w-full h-auto" src="@asset('/images/ope-june/cat-news-en.jpg')" alt="">
    </figure>
</a>
@endif
</div>