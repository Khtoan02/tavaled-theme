<?php
/**
 * Custom Post Types
 *
 * @package TavaLED
 */

// Ngăn truy cập trực tiếp
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Custom Post Types
 */
function tavaled_register_post_types() {
    
    // Sản phẩm (Products)
    $product_labels = array(
        'name'                  => _x('Sản phẩm', 'Post type general name', 'tavaled-theme'),
        'singular_name'         => _x('Sản phẩm', 'Post type singular name', 'tavaled-theme'),
        'menu_name'             => _x('Sản phẩm', 'Admin Menu text', 'tavaled-theme'),
        'name_admin_bar'        => _x('Sản phẩm', 'Add New on Toolbar', 'tavaled-theme'),
        'add_new'               => __('Thêm mới', 'tavaled-theme'),
        'add_new_item'          => __('Thêm sản phẩm mới', 'tavaled-theme'),
        'new_item'              => __('Sản phẩm mới', 'tavaled-theme'),
        'edit_item'             => __('Chỉnh sửa sản phẩm', 'tavaled-theme'),
        'view_item'             => __('Xem sản phẩm', 'tavaled-theme'),
        'all_items'             => __('Tất cả sản phẩm', 'tavaled-theme'),
        'search_items'          => __('Tìm kiếm sản phẩm', 'tavaled-theme'),
        'parent_item_colon'     => __('Sản phẩm cha:', 'tavaled-theme'),
        'not_found'             => __('Không tìm thấy sản phẩm.', 'tavaled-theme'),
        'not_found_in_trash'    => __('Không tìm thấy sản phẩm trong thùng rác.', 'tavaled-theme'),
        'featured_image'        => _x('Ảnh đại diện', 'Overrides the “Featured Image” phrase', 'tavaled-theme'),
        'set_featured_image'    => _x('Chọn ảnh đại diện', 'Overrides the “Set featured image” phrase', 'tavaled-theme'),
        'remove_featured_image' => _x('Xóa ảnh đại diện', 'Overrides the “Remove featured image” phrase', 'tavaled-theme'),
        'use_featured_image'    => _x('Sử dụng làm ảnh đại diện', 'Overrides the “Use as featured image” phrase', 'tavaled-theme'),
        'archives'              => _x('Lưu trữ sản phẩm', 'The post type archive label', 'tavaled-theme'),
        'insert_into_item'      => _x('Chèn vào sản phẩm', 'Overrides the “Insert into post” phrase', 'tavaled-theme'),
        'uploaded_to_this_item' => _x('Tải lên sản phẩm này', 'Overrides the “Uploaded to this post” phrase', 'tavaled-theme'),
        'filter_items_list'     => _x('Lọc danh sách sản phẩm', 'Screen reader text', 'tavaled-theme'),
        'items_list_navigation' => _x('Điều hướng danh sách sản phẩm', 'Screen reader text', 'tavaled-theme'),
        'items_list'            => _x('Danh sách sản phẩm', 'Screen reader text', 'tavaled-theme'),
    );

    $product_args = array(
        'labels'             => $product_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'san-pham'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-lightbulb',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest'       => true,
    );

    register_post_type('san-pham', $product_args);

    // Dự án (Projects)
    $project_labels = array(
        'name'                  => _x('Dự án', 'Post type general name', 'tavaled-theme'),
        'singular_name'         => _x('Dự án', 'Post type singular name', 'tavaled-theme'),
        'menu_name'             => _x('Dự án', 'Admin Menu text', 'tavaled-theme'),
        'name_admin_bar'        => _x('Dự án', 'Add New on Toolbar', 'tavaled-theme'),
        'add_new'               => __('Thêm mới', 'tavaled-theme'),
        'add_new_item'          => __('Thêm dự án mới', 'tavaled-theme'),
        'new_item'              => __('Dự án mới', 'tavaled-theme'),
        'edit_item'             => __('Chỉnh sửa dự án', 'tavaled-theme'),
        'view_item'             => __('Xem dự án', 'tavaled-theme'),
        'all_items'             => __('Tất cả dự án', 'tavaled-theme'),
        'search_items'          => __('Tìm kiếm dự án', 'tavaled-theme'),
        'not_found'             => __('Không tìm thấy dự án.', 'tavaled-theme'),
        'not_found_in_trash'    => __('Không tìm thấy dự án trong thùng rác.', 'tavaled-theme'),
    );

    $project_args = array(
        'labels'             => $project_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'du-an'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest'       => true,
    );

    register_post_type('du-an', $project_args);

    // Giải pháp (Solutions)
    $solution_labels = array(
        'name'                  => _x('Giải pháp', 'Post type general name', 'tavaled-theme'),
        'singular_name'         => _x('Giải pháp', 'Post type singular name', 'tavaled-theme'),
        'menu_name'             => _x('Giải pháp', 'Admin Menu text', 'tavaled-theme'),
        'name_admin_bar'        => _x('Giải pháp', 'Add New on Toolbar', 'tavaled-theme'),
        'add_new'               => __('Thêm mới', 'tavaled-theme'),
        'add_new_item'          => __('Thêm giải pháp mới', 'tavaled-theme'),
        'new_item'              => __('Giải pháp mới', 'tavaled-theme'),
        'edit_item'             => __('Chỉnh sửa giải pháp', 'tavaled-theme'),
        'view_item'             => __('Xem giải pháp', 'tavaled-theme'),
        'all_items'             => __('Tất cả giải pháp', 'tavaled-theme'),
        'search_items'          => __('Tìm kiếm giải pháp', 'tavaled-theme'),
        'not_found'             => __('Không tìm thấy giải pháp.', 'tavaled-theme'),
        'not_found_in_trash'    => __('Không tìm thấy giải pháp trong thùng rác.', 'tavaled-theme'),
    );

    $solution_args = array(
        'labels'             => $solution_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'giai-phap'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-admin-tools',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest'       => true,
    );

    register_post_type('giai-phap', $solution_args);

    // Tuyển dụng (Careers)
    $career_labels = array(
        'name'                  => _x('Tuyển dụng', 'Post type general name', 'tavaled-theme'),
        'singular_name'         => _x('Tin tuyển dụng', 'Post type singular name', 'tavaled-theme'),
        'menu_name'             => _x('Tuyển dụng', 'Admin Menu text', 'tavaled-theme'),
        'name_admin_bar'        => _x('Tuyển dụng', 'Add New on Toolbar', 'tavaled-theme'),
        'add_new'               => __('Thêm mới', 'tavaled-theme'),
        'add_new_item'          => __('Thêm tin tuyển dụng mới', 'tavaled-theme'),
        'new_item'              => __('Tin tuyển dụng mới', 'tavaled-theme'),
        'edit_item'             => __('Chỉnh sửa tin tuyển dụng', 'tavaled-theme'),
        'view_item'             => __('Xem tin tuyển dụng', 'tavaled-theme'),
        'all_items'             => __('Tất cả tin tuyển dụng', 'tavaled-theme'),
        'search_items'          => __('Tìm kiếm tin tuyển dụng', 'tavaled-theme'),
        'not_found'             => __('Không tìm thấy tin tuyển dụng.', 'tavaled-theme'),
        'not_found_in_trash'    => __('Không tìm thấy tin tuyển dụng trong thùng rác.', 'tavaled-theme'),
    );

    $career_args = array(
        'labels'             => $career_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'tuyen-dung'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 8,
        'menu_icon'          => 'dashicons-businessman',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest'       => true,
    );

    register_post_type('tuyen-dung', $career_args);

    // Flush rewrite rules on theme activation
    if (get_option('tavaled_theme_activated')) {
        flush_rewrite_rules();
        delete_option('tavaled_theme_activated');
    }
}

// Set flag on theme activation
add_action('after_switch_theme', function() {
    add_option('tavaled_theme_activated', true);
});