<?php
/**
 * Theme Setup Functions
 *
 * @package TavaLED
 */

// Ngăn truy cập trực tiếp
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function tavaled_theme_setup() {
    // Make theme available for translation
    load_theme_textdomain('tavaled-theme', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Enable support for Post Formats
    add_theme_support('post-formats', array(
        'aside',
        'gallery',
        'link',
        'image',
        'quote',
        'video',
        'audio',
    ));

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Set up the WordPress core custom background feature
    add_theme_support('custom-background', apply_filters('tavaled_custom_background_args', array(
        'default-color' => 'fff8f6',
        'default-image' => '',
    )));

    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for core custom logo
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    // Add support for WooCommerce
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    // Gutenberg support
    add_theme_support('align-wide');
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');

    // Add custom editor font sizes
    add_theme_support('editor-font-sizes', array(
        array(
            'name'      => esc_attr__('Small', 'tavaled-theme'),
            'size'      => 12,
            'slug'      => 'small'
        ),
        array(
            'name'      => esc_attr__('Regular', 'tavaled-theme'),
            'size'      => 16,
            'slug'      => 'regular'
        ),
        array(
            'name'      => esc_attr__('Large', 'tavaled-theme'),
            'size'      => 24,
            'slug'      => 'large'
        ),
        array(
            'name'      => esc_attr__('Huge', 'tavaled-theme'),
            'size'      => 36,
            'slug'      => 'huge'
        )
    ));

    // Add custom color palette
    add_theme_support('editor-color-palette', array(
        array(
            'name'  => esc_attr__('Primary Orange', 'tavaled-theme'),
            'slug'  => 'primary-orange',
            'color' => '#f05a25',
        ),
        array(
            'name'  => esc_attr__('Secondary Navy', 'tavaled-theme'),
            'slug'  => 'secondary-navy',
            'color' => '#1c2857',
        ),
        array(
            'name'  => esc_attr__('White', 'tavaled-theme'),
            'slug'  => 'white',
            'color' => '#ffffff',
        ),
        array(
            'name'  => esc_attr__('Background', 'tavaled-theme'),
            'slug'  => 'background',
            'color' => '#fff8f6',
        ),
        array(
            'name'  => esc_attr__('Light Gray', 'tavaled-theme'),
            'slug'  => 'light-gray',
            'color' => '#f5f5f5',
        ),
        array(
            'name'  => esc_attr__('Dark Gray', 'tavaled-theme'),
            'slug'  => 'dark-gray',
            'color' => '#333333',
        ),
    ));

    // Disable custom colors
    add_theme_support('disable-custom-colors');

    // Disable custom font sizes
    add_theme_support('disable-custom-font-sizes');

    // Add support for full and wide align images
    add_theme_support('align-wide');

    // Adds starter content to highlight the theme on fresh sites
    add_theme_support('starter-content', array(
        'widgets' => array(
            'footer-1' => array(
                'text_about',
            ),
            'footer-2' => array(
                 'recent-posts',
            ),
            'footer-3' => array(
                'text_business_info',
            ),
            'footer-4' => array(
                'search',
            ),
        ),

        'posts' => array(
            'home',
            'about',
            'contact',
            'blog',
        ),

        'nav_menus' => array(
            'primary' => array(
                'name' => __('Primary Menu', 'tavaled-theme'),
                'items' => array(
                    'link_home',
                    'page_about',
                    'page_blog',
                    'page_contact',
                ),
            ),
        ),
    ));

    // Set content width
    if (!isset($content_width)) {
        $content_width = 1200;
    }
}