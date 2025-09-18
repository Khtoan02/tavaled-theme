<?php
/**
 * Helper Functions
 *
 * @package TavaLED
 */

// Ngăn truy cập trực tiếp
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get post excerpt with custom length
 */
function tavaled_get_excerpt($length = 20, $post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $excerpt = get_post_field('post_excerpt', $post_id);
    
    if (empty($excerpt)) {
        $content = get_post_field('post_content', $post_id);
        $excerpt = wp_trim_words($content, $length, '...');
    }
    
    return $excerpt;
}

/**
 * Get breadcrumbs
 */
function tavaled_breadcrumbs() {
    if (is_front_page()) {
        return;
    }
    
    echo '<nav class="breadcrumbs" aria-label="Breadcrumb">';
    echo '<ol class="breadcrumb-list">';
    
    // Home
    echo '<li class="breadcrumb-item"><a href="' . esc_url(home_url('/')) . '">Trang chủ</a></li>';
    
    // Blog
    if (is_single() && get_post_type() == 'post') {
        $blog_page_id = get_option('page_for_posts');
        if ($blog_page_id) {
            echo '<li class="breadcrumb-item"><a href="' . get_permalink($blog_page_id) . '">' . get_the_title($blog_page_id) . '</a></li>';
        }
    }
    
    // Custom Post Type Archive
    if (is_single() && get_post_type() != 'post') {
        $post_type = get_post_type_object(get_post_type());
        if ($post_type->has_archive) {
            echo '<li class="breadcrumb-item"><a href="' . get_post_type_archive_link(get_post_type()) . '">' . $post_type->labels->name . '</a></li>';
        }
    }
    
    // Category
    if (is_category()) {
        echo '<li class="breadcrumb-item active" aria-current="page">' . single_cat_title('', false) . '</li>';
    }
    
    // Tag
    if (is_tag()) {
        echo '<li class="breadcrumb-item active" aria-current="page">' . single_tag_title('', false) . '</li>';
    }
    
    // Archive
    if (is_archive() && !is_category() && !is_tag()) {
        echo '<li class="breadcrumb-item active" aria-current="page">' . post_type_archive_title('', false) . '</li>';
    }
    
    // Search
    if (is_search()) {
        echo '<li class="breadcrumb-item active" aria-current="page">Kết quả tìm kiếm</li>';
    }
    
    // 404
    if (is_404()) {
        echo '<li class="breadcrumb-item active" aria-current="page">404 - Không tìm thấy trang</li>';
    }
    
    // Page
    if (is_page() && !is_front_page()) {
        $ancestors = get_post_ancestors(get_the_ID());
        if ($ancestors) {
            $ancestors = array_reverse($ancestors);
            foreach ($ancestors as $ancestor) {
                echo '<li class="breadcrumb-item"><a href="' . get_permalink($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
            }
        }
        echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
    }
    
    // Single
    if (is_single()) {
        echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
    }
    
    echo '</ol>';
    echo '</nav>';
}

/**
 * Get related posts
 */
function tavaled_get_related_posts($post_id = null, $number = 3) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $post_type = get_post_type($post_id);
    
    // Get categories/taxonomies
    $taxonomies = get_object_taxonomies($post_type);
    $terms = array();
    
    foreach ($taxonomies as $taxonomy) {
        $post_terms = wp_get_post_terms($post_id, $taxonomy, array('fields' => 'ids'));
        if (!empty($post_terms) && !is_wp_error($post_terms)) {
            $terms[$taxonomy] = $post_terms;
        }
    }
    
    if (empty($terms)) {
        return false;
    }
    
    // Build query
    $args = array(
        'post_type'      => $post_type,
        'posts_per_page' => $number,
        'post__not_in'   => array($post_id),
        'orderby'        => 'rand',
        'tax_query'      => array('relation' => 'OR'),
    );
    
    foreach ($terms as $taxonomy => $term_ids) {
        $args['tax_query'][] = array(
            'taxonomy' => $taxonomy,
            'field'    => 'term_id',
            'terms'    => $term_ids,
        );
    }
    
    return new WP_Query($args);
}

/**
 * Check if page has sidebar
 */
function tavaled_has_sidebar() {
    if (is_single() || is_page()) {
        $sidebar_meta = get_post_meta(get_the_ID(), '_tavaled_sidebar', true);
        if ($sidebar_meta == 'none') {
            return false;
        }
    }
    
    return is_active_sidebar('sidebar-1');
}

/**
 * Get social share links
 */
function tavaled_social_share() {
    $url = urlencode(get_permalink());
    $title = urlencode(get_the_title());
    
    $links = array(
        'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=' . $url,
        'twitter'  => 'https://twitter.com/intent/tweet?url=' . $url . '&text=' . $title,
        'linkedin' => 'https://www.linkedin.com/shareArticle?mini=true&url=' . $url . '&title=' . $title,
        'pinterest' => 'https://pinterest.com/pin/create/button/?url=' . $url . '&description=' . $title,
    );
    
    return $links;
}

/**
 * Get reading time
 */
function tavaled_reading_time($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $content = get_post_field('post_content', $post_id);
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200); // 200 words per minute
    
    return sprintf(_n('%d phút đọc', '%d phút đọc', $reading_time, 'tavaled-theme'), $reading_time);
}

/**
 * Format phone number for tel: link
 */
function tavaled_format_phone($phone) {
    // Remove all non-numeric characters
    $phone = preg_replace('/[^0-9]/', '', $phone);
    
    // Add country code if not present
    if (substr($phone, 0, 2) != '84') {
        $phone = '84' . ltrim($phone, '0');
    }
    
    return '+' . $phone;
}

/**
 * Get post views count
 */
function tavaled_get_post_views($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $views = get_post_meta($post_id, '_tavaled_post_views', true);
    return $views ? $views : 0;
}

/**
 * Set post views count
 */
function tavaled_set_post_views($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $views = tavaled_get_post_views($post_id);
    update_post_meta($post_id, '_tavaled_post_views', $views + 1);
}

/**
 * Get archive title without prefix
 */
function tavaled_get_archive_title() {
    $title = '';
    
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = get_the_author();
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    } elseif (is_archive()) {
        $title = get_the_archive_title();
    }
    
    return $title;
}

/**
 * Check if current page is a custom post type
 */
function tavaled_is_custom_post_type() {
    $custom_post_types = array('san-pham', 'du-an', 'giai-phap', 'tuyen-dung');
    return is_singular($custom_post_types) || is_post_type_archive($custom_post_types);
}

/**
 * Get theme option (for use with ACF options page)
 */
function tavaled_get_option($option_name, $default = '') {
    if (function_exists('get_field')) {
        $value = get_field($option_name, 'option');
        return $value ? $value : $default;
    }
    return $default;
}

/**
 * Premium Walker for Main Navigation Menu
 */
class Premium_Walker_Nav_Menu extends Walker_Nav_Menu {
    
    // Start Level - add premium dropdown classes
    function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class=\"premium-dropdown\">\n";
        $output .= "$indent\t<ul class=\"dropdown-list\">\n";
    }
    
    // End Level
    function end_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent\t</ul>\n";
        $output .= "$indent</div>\n";
    }
    
    // Start Element
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        
        // Add premium classes
        if ($depth === 0) {
            $classes[] = 'nav-item';
        }
        
        // Add dropdown class if item has children
        $has_children = in_array('menu-item-has-children', $classes);
        if ($has_children && $depth === 0) {
            $classes[] = 'has-dropdown';
        }
        
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        
        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';
        
        $output .= $indent . '<li' . $id . $class_names . '>';
        
        $attributes = ! empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= ! empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= ! empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= ! empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        
        // Add premium link class
        if ($depth === 0) {
            $link_class = 'nav-link';
        } else {
            $link_class = 'dropdown-link';
        }
        
        $item_output = isset($args->before) ? $args->before : '';
        $item_output .= '<a class="' . $link_class . '"' . $attributes . '>';
        $item_output .= '<span class="nav-text">' . (isset($args->link_before) ? $args->link_before : '') . apply_filters('the_title', $item->title, $item->ID) . (isset($args->link_after) ? $args->link_after : '') . '</span>';
        
        // Add dropdown arrow for parent items
        if ($has_children && $depth === 0) {
            $item_output .= '<i class="fas fa-chevron-down nav-arrow"></i>';
        }
        
        $item_output .= '</a>';
        $item_output .= isset($args->after) ? $args->after : '';
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
    
    // End Element
    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</li>\n";
    }
}

/**
 * Custom Walker for Main Navigation Menu
 */
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    
    // Start Level - add custom dropdown classes
    function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class=\"mega-dropdown\">\n";
        $output .= "$indent\t<div class=\"dropdown-inner\">\n";
        $output .= "$indent\t\t<ul class=\"dropdown-menu-custom\">\n";
    }
    
    // End Level
    function end_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent\t\t</ul>\n";
        $output .= "$indent\t</div>\n";
        $output .= "$indent</div>\n";
    }
    
    // Start Element
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        
        // Add custom classes
        if ($depth === 0) {
            $classes[] = 'nav-item-custom';
        }
        
        // Add dropdown class if item has children
        $has_children = in_array('menu-item-has-children', $classes);
        if ($has_children && $depth === 0) {
            $classes[] = 'has-dropdown';
        }
        
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        
        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';
        
        $output .= $indent . '<li' . $id . $class_names . '>';
        
        $attributes = ! empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= ! empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= ! empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= ! empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        
        // Add custom link class
        if ($depth === 0) {
            $link_class = 'nav-link-custom';
        } else {
            $link_class = 'dropdown-item-custom';
        }
        
        $item_output = isset($args->before) ? $args->before : '';
        $item_output .= '<a class="' . $link_class . '"' . $attributes . '>';
        
        // Add icon for dropdown items
        if ($depth > 0) {
            $item_output .= '<i class="fas fa-angle-right me-2"></i>';
        }
        
        $item_output .= (isset($args->link_before) ? $args->link_before : '') . apply_filters('the_title', $item->title, $item->ID) . (isset($args->link_after) ? $args->link_after : '');
        
        // Add dropdown arrow for parent items
        if ($has_children && $depth === 0) {
            $item_output .= ' <i class="fas fa-chevron-down dropdown-arrow ms-1"></i>';
        }
        
        $item_output .= '</a>';
        $item_output .= isset($args->after) ? $args->after : '';
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
    
    // End Element
    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</li>\n";
    }
}

/**
 * Mobile Walker for Navigation Menu
 */
class Mobile_Walker_Nav_Menu extends Walker_Nav_Menu {
    
    // Start Level
    function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"mobile-submenu collapse\">\n";
    }
    
    // End Level
    function end_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
    
    // Start Element
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        
        // Add mobile classes
        $classes[] = 'mobile-nav-item';
        
        // Add dropdown class if item has children
        $has_children = in_array('menu-item-has-children', $classes);
        if ($has_children) {
            $classes[] = 'has-children';
        }
        
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        
        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';
        
        $output .= $indent . '<li' . $id . $class_names . '>';
        
        $attributes = ! empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= ! empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= ! empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= ! empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        
        $item_output = isset($args->before) ? $args->before : '';
        
        if ($has_children) {
            $item_output .= '<div class="mobile-nav-header d-flex justify-content-between align-items-center">';
            $item_output .= '<a class="mobile-nav-link"' . $attributes . '>';
            $item_output .= (isset($args->link_before) ? $args->link_before : '') . apply_filters('the_title', $item->title, $item->ID) . (isset($args->link_after) ? $args->link_after : '');
            $item_output .= '</a>';
            $item_output .= '<button class="mobile-submenu-toggle btn btn-link p-1" data-bs-toggle="collapse" data-bs-target="#submenu-' . $item->ID . '">';
            $item_output .= '<i class="fas fa-chevron-down"></i>';
            $item_output .= '</button>';
            $item_output .= '</div>';
        } else {
            $item_output .= '<a class="mobile-nav-link"' . $attributes . '>';
            $item_output .= (isset($args->link_before) ? $args->link_before : '') . apply_filters('the_title', $item->title, $item->ID) . (isset($args->link_after) ? $args->link_after : '');
            $item_output .= '</a>';
        }
        
        $item_output .= isset($args->after) ? $args->after : '';
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
    
    // End Element
    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</li>\n";
    }
}