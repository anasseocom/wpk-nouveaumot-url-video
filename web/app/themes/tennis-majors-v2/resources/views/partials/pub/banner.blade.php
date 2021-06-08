@php 
    $my_current_lang = apply_filters( 'wpml_current_language', NULL );
@endphp
<div class="max-w-screen-xl ml-4 xl:m-auto py-5 lg:py-8 relative">
@if($my_current_lang =='fr')         
<a class="mx-auto w-full" href="https://www.tenniswarehouse-europe.com/catpage-LACFSJUNE.html?from=kicker&vat=fr&lang=fr" rel="nofollow sponsored" target="_blank">
    <figure class="w-full h-full">
        <img src="@asset('/images/ope-june/hp-fr.jpg')" alt="">
    </figure>
</a>
@endif
@if($my_current_lang =='en')
<a href="https://www.tenniswarehouse-europe.com/catpage-LACFSJUNE.html?from=kicker&lang=en" rel="nofollow sponsored" target="_blank">
    <figure class="w-full h-auto"> 
        <img src="@asset('/images/ope-june/hp-en.jpg')" alt="" class="mx-auto">
    </figure>
</a>
@endif
</div>