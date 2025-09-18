<?php
/**
 * TavaLED Theme Functions
 *
 * @package TavaLED
 * @since 1.0.0
 */

// Ngăn truy cập trực tiếp
if (!defined('ABSPATH')) {
    exit;
}

// Định nghĩa các hằng số
define('TAVALED_THEME_VERSION', '1.0.0');
define('TAVALED_THEME_DIR', get_template_directory());
define('TAVALED_THEME_URI', get_template_directory_uri());

// Include các file chức năng
require_once TAVALED_THEME_DIR . '/inc/theme-setup.php';
require_once TAVALED_THEME_DIR . '/inc/enqueue.php';
require_once TAVALED_THEME_DIR . '/inc/custom-post-types.php';
require_once TAVALED_THEME_DIR . '/inc/custom-taxonomies.php';
require_once TAVALED_THEME_DIR . '/inc/custom-meta-fields.php';
require_once TAVALED_THEME_DIR . '/inc/sample-data.php';
require_once TAVALED_THEME_DIR . '/inc/woocommerce-sample-data.php';
require_once TAVALED_THEME_DIR . '/inc/helpers.php';

// Kích hoạt theme
add_action('after_setup_theme', 'tavaled_theme_setup');

// Enqueue scripts và styles
add_action('wp_enqueue_scripts', 'tavaled_enqueue_scripts');

// Đăng ký Custom Post Types
add_action('init', 'tavaled_register_post_types');

// Đăng ký Custom Taxonomies
add_action('init', 'tavaled_register_taxonomies');

// Đăng ký widget areas
add_action('widgets_init', 'tavaled_widgets_init');
function tavaled_widgets_init() {
    // Sidebar chính
    register_sidebar(array(
        'name'          => __('Sidebar', 'tavaled-theme'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'tavaled-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    // Footer widgets
    for ($i = 1; $i <= 4; $i++) {
        register_sidebar(array(
            'name'          => sprintf(__('Footer %d', 'tavaled-theme'), $i),
            'id'            => 'footer-' . $i,
            'description'   => __('Add widgets here.', 'tavaled-theme'),
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ));
    }
}

// Custom excerpt length
add_filter('excerpt_length', 'tavaled_excerpt_length');
function tavaled_excerpt_length($length) {
    return 20;
}

// Custom excerpt more
add_filter('excerpt_more', 'tavaled_excerpt_more');
function tavaled_excerpt_more($more) {
    return '...';
}

// Add body classes
add_filter('body_class', 'tavaled_body_classes');
function tavaled_body_classes($classes) {
    // Add page slug if it doesn't exist
    if (is_single() || is_page() && !is_front_page()) {
        if (!in_array(basename(get_permalink()), $classes)) {
            $classes[] = basename(get_permalink());
        }
    }
    
    // Add class if sidebar is active
    if (is_active_sidebar('sidebar-1')) {
        $classes[] = 'has-sidebar';
    }
    
    return $classes;
}

// Custom logo support
add_theme_support('custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array('site-title', 'site-description'),
));

// Add theme support for selective refresh for widgets
add_theme_support('customize-selective-refresh-widgets');

// Add support for responsive embeds
add_theme_support('responsive-embeds');

// Add support for editor styles
add_theme_support('editor-styles');

// Add support for block styles
add_theme_support('wp-block-styles');

// Add support for wide alignment
add_theme_support('align-wide');

// Remove WordPress version from RSS feeds
add_filter('the_generator', '__return_empty_string');

// Disable WordPress emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

// Custom pagination
function tavaled_pagination() {
    global $wp_query;
    $big = 999999999;
    
    $paginate_links = paginate_links(array(
        'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'    => '?paged=%#%',
        'current'   => max(1, get_query_var('paged')),
        'total'     => $wp_query->max_num_pages,
        'prev_text' => __('&laquo; Previous', 'tavaled-theme'),
        'next_text' => __('Next &raquo;', 'tavaled-theme'),
        'type'      => 'array',
    ));
    
    if ($paginate_links) {
        echo '<nav class="pagination">';
        echo '<ul class="pagination-list">';
        foreach ($paginate_links as $link) {
            echo '<li class="pagination-item">' . $link . '</li>';
        }
        echo '</ul>';
        echo '</nav>';
    }
}

// Custom search form
add_filter('get_search_form', 'tavaled_search_form');
function tavaled_search_form($form) {
    $form = '<form role="search" method="get" class="search-form" action="' . home_url('/') . '">
        <label>
            <span class="screen-reader-text">' . _x('Search for:', 'label', 'tavaled-theme') . '</span>
            <input type="search" class="search-field" placeholder="' . esc_attr_x('Search &hellip;', 'placeholder', 'tavaled-theme') . '" value="' . get_search_query() . '" name="s" />
        </label>
        <button type="submit" class="search-submit glass-button">
            <span class="screen-reader-text">' . _x('Search', 'submit button', 'tavaled-theme') . '</span>
            <i class="fas fa-search"></i>
        </button>
    </form>';
    
    return $form;
}

// Add custom image sizes
add_action('after_setup_theme', 'tavaled_custom_image_sizes');
function tavaled_custom_image_sizes() {
    add_image_size('product-thumb', 400, 400, true);
    add_image_size('product-large', 800, 800, true);
    add_image_size('blog-thumb', 600, 400, true);
    add_image_size('project-thumb', 600, 450, true);
    add_image_size('banner', 1920, 600, true);
}

// Register custom menus locations
function tavaled_register_menus() {
    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'tavaled-theme'),
        'footer'    => __('Footer Menu', 'tavaled-theme'),
        'mobile'    => __('Mobile Menu', 'tavaled-theme'),
        'top-bar'   => __('Top Bar Menu', 'tavaled-theme'),
    ));
}
add_action('init', 'tavaled_register_menus');

// Add ACF options page (if ACF is active)
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug'  => 'theme-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'  => 'Header Settings',
        'menu_title'  => 'Header',
        'parent_slug' => 'theme-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'  => 'Footer Settings',
        'menu_title'  => 'Footer',
        'parent_slug' => 'theme-settings',
    ));
}