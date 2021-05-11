@php
$my_current_lang = apply_filters( 'wpml_current_language', NULL );
@endphp
@if($my_current_lang =='fr')         
@published('j F Y')
@endif
@if($my_current_lang =='en')
@published('F j, Y')
@endif