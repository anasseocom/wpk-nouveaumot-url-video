<?php

add_action('admin_init', function () {  
    add_settings_section(  
        'social_medias',
        'Social Medias',
        __NAMESPACE__.'\\social_medias_callback',
        'general'
    );

    add_settings_field(
        'twitter_url',
        'Twitter URL',
        __NAMESPACE__.'\\social_field_callback',
        'general',
        'social_medias',
        array(
            'twitter_url' // Should match Option ID
        )  
    );

    add_settings_field(
        'facebook_url',
        'Facebook URL',
        __NAMESPACE__.'\\social_field_callback',
        'general',
        'social_medias',
        array(
            'facebook_url' // Should match Option ID
        )  
    ); 

    add_settings_field(
        'instagram_url',
        'Instagram URL',
        __NAMESPACE__.'\\social_field_callback',
        'general',
        'social_medias',
        array(
            'instagram_url' // Should match Option ID
        )  
    );

    register_setting('general','twitter_url', 'esc_attr');
    register_setting('general','facebook_url', 'esc_attr');
    register_setting('general','instagram_url', 'esc_attr');
});  


function social_medias_callback() { // Section Callback
}

function social_field_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<input type="text" placeholder="https://exemple.com..." id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
}