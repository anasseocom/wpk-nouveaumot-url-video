<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\asset;

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('sage/vendor.js', asset('scripts/vendor.js')->uri(), ['jquery'], null, true);
    wp_enqueue_script('sage/app.js', asset('scripts/app.js')->uri(), ['sage/vendor.js'], null, true);

    wp_add_inline_script('sage/vendor.js', asset('scripts/manifest.js')->contents(), 'before');

    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
    wp_enqueue_style('adobe fonts', 'https://use.typekit.net/yvr8obr.css', false, null);
    wp_enqueue_style('sage/app.css', asset('styles/app.css')->uri(), false, null);
}, 100);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action('enqueue_block_editor_assets', function () {
    if ($manifest = asset('scripts/manifest.asset.php')->load()) {
        wp_enqueue_script('sage/vendor.js', asset('scripts/vendor.js')->uri(), ...array_values($manifest));
        wp_enqueue_script('sage/editor.js', asset('scripts/editor.js')->uri(), ['sage/vendor.js'], null, true);

        wp_add_inline_script('sage/vendor.js', asset('scripts/manifest.js')->contents(), 'before');
    }

    wp_enqueue_style('sage/editor.css', asset('styles/editor.css')->uri(), false, null);
}, 100);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from the Soil plugin if activated.
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil', [
        'clean-up',
        'nav-walker',
        'nice-search'
    ]);

    /**
     * Register the navigation menus.
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
        'wpml_navigation' => __('WPML Navigation', 'sage'),
        'footer_navigation' => __('Footer Navigation', 'sage'),
    ]);

    /**
     * Register the editor color palette.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-color-palettes
     */
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => esc_attr__( 'Roland-Garros', 'themeLangDomain' ),
            'slug' => 'roland-garros',
            'color' => '#EE4400',
        ),
        array(
            'name' => esc_attr__( 'Classic Black', 'themeLangDomain' ),
            'slug' => 'classic-black',
            'color' => '#000',
        ),
        array(
            'name' => esc_attr__( 'Australian Open', 'themeLangDomain' ),
            'slug' => 'australian-open',
            'color' => '#0088D1',
        ),
        array(
            'name' => esc_attr__( 'US Open', 'themeLangDomain' ),
            'slug' => 'us-open',
            'color' => '#0C1F86',
        ),
        array(
            'name' => esc_attr__( 'Wimbledon', 'themeLangDomain' ),
            'slug' => 'wimbledon',
            'color' => '#00632A',
        ),
    ) );

    /**
     * Register the editor color gradient presets.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-gradient-presets
     */
    add_theme_support('editor-gradient-presets', []);

    /**
     * Register the editor font sizes.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-font-sizes
     */
    add_theme_support('editor-font-sizes', []);

    /**
     * Register relative length units in the editor.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#support-custom-units
     */
    add_theme_support('custom-units');

    /**
     * Enable support for custom line heights in the editor.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#supporting-custom-line-heights
     */
    add_theme_support('custom-line-height');

    /**
     * Enable support for custom block spacing control in the editor.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#spacing-control
     */
    add_theme_support('custom-spacing');

    /**
     * Disable custom colors in the editor.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-colors-in-block-color-palettes
     */
    add_theme_support('disable-custom-colors');

    /**
     * Disable custom color gradients in the editor.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-gradients
     */
    add_theme_support('disable-custom-gradients');

    /**
     * Disable custom font sizes in the editor.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-font-sizes
     */
    add_theme_support('disable-custom-font-sizes');

    /**
     * Disable the default block patterns.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable wide alignment support.
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#wide-alignment
     */
    add_theme_support('align-wide');

    /**
     * Enable responsive embed support.
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style'
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');
}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ];

    register_sidebar([
        'name' => __('Primary', 'sage'),
        'id' => 'sidebar-primary'
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'sage'),
        'id' => 'sidebar-footer'
    ] + $config);
});

add_action('after_setup_theme', function () {
    load_theme_textdomain('sage', get_template_directory() . '/resources/lang');
});

add_action('init', function () {
    
    if (!function_exists('acf_add_options_page')) {
        return;
    }
    
    acf_add_options_page([
        'page_title'    => __('Home edition', 'sage'),
        'menu_title'    => __('Home edition', 'sage'),
        'menu_slug'     => 'home-edition',
        'capability'    => 'edit_posts',
        'parent_slug'   => '',
        'position'      => 1, 
        'icon_url'      => 'dashicons-admin-generic'
    ]);
});

add_action('init', function () {
    p2p_register_connection_type( array(
        'name' => 'multiple_authors',
        'title' => 'Author role',
        'from' => 'user',
        'to' => [0 => 'post'],
        'fields' => array(
            'role' => array( 
                'title' => 'Role',
                'type' => 'select',
                'values' => array( __('Writer', 'sage'), __('Co-writer', 'sage'), __('Editor', 'sage'), __('Photo', 'sage'), __('Translator', 'sage'), __('Curator', 'sage'), __('Author', 'sage'), __('Columnist', 'sage'), __('Expert', 'sage'))
            ),
        )
    ) );
});

add_action('init', function () {
    p2p_register_connection_type( array(
        'name' => 'multiple_authors_videos',
        'title' => 'Author role on this video',
        'from' => 'user',
        'to' => [0 => 'videos'],
        'fields' => array(
            'role' => array( 
                'title' => 'Role',
                'type' => 'select',
                'values' => array( __('Writer', 'sage'), __('Co-writer', 'sage'), __('Motion design', 'sage'), __('Studio', 'sage'), __('Producer', 'sage'), __('Editor', 'sage'), __('Photo', 'sage'), __('Translator', 'sage'), __('Curator', 'sage'), __('Author', 'sage'), __('Columnist', 'sage'), __('Expert', 'sage'), __('Video operator', 'sage'), __('Sound operator', 'sage'), __('Host', 'sage'), __('Guest', 'sage'))
            ),
        )
    ) );
});
