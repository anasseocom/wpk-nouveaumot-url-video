<!-- ANALYTICS TRACKING CODE -->

@php
$my_current_lang = apply_filters( 'wpml_current_language', NULL );
@endphp
    


   // FR language
   @if($my_current_lang =='fr')     
          
         <!-- Content for FR language here -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156196903-3"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
 
        gtag('config', 'A-156196903-3');
        </script>
@endif
@if($my_current_lang =='en')
       <!-- Content for EN language here -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156196903-2"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
 
        gtag('config', 'UA-156196903-2');
        </script>
 @endif
