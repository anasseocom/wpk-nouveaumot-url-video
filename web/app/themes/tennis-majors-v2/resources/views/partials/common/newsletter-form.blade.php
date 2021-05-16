<div id="newsletter" class="newsletter-form">
    <div class="newsletter-form-container">
        <div class="newsletter-form-image-box">
               <img src="@asset('/images/phone-newsletter-home.png')" alt="Packshot Newsletter" class="absolute bottom-0">
               <div class="padding">
               </div>
        </div>
        <div class="newsletter-form-baseline">
            <div>
                <h2 class="uppercase"><span class="font-bold text-4xl">{{ __('Subscribe', 'sage')}}</span> </br><span class="text-2xl">{{ __('to our newsletter', 'sage')}}</span></h2>
                <div class="little-baseline">{{ __('Stay in touch with the latest news, right into your inbox!', 'sage')}}</div>
            </div>
        </div>
        <div class="newsletter-form-form">
            <div class="">
            @php
$my_current_lang = apply_filters( 'wpml_current_language', NULL );
@endphp
@if($my_current_lang =='fr')         
@shortcode('[ninja_form id=9]')
@endif
@if($my_current_lang =='en')
@shortcode('[ninja_form id=10]')
@endif
            
            </div>
        </div>
    </div>
</div>