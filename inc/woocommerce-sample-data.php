<?php
/**
 * WooCommerce Sample Data Generator
 *
 * @package TavaLED
 */

// Ngăn truy cập trực tiếp
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Create WooCommerce product categories
 */
function tavaled_create_woo_categories() {
    $categories = array(
        'man-hinh-led' => array(
            'name' => 'Màn hình LED',
            'description' => 'Các loại màn hình LED chất lượng cao cho quảng cáo và hiển thị',
            'slug' => 'man-hinh-led'
        ),
        'he-thong-am-thanh' => array(
            'name' => 'Hệ thống âm thanh',
            'description' => 'Hệ thống âm thanh chuyên nghiệp cho sự kiện và hội trường',
            'slug' => 'he-thong-am-thanh'
        ),
        'he-thong-anh-sang' => array(
            'name' => 'Hệ thống ánh sáng',
            'description' => 'Đèn LED và thiết bị chiếu sáng thông minh',
            'slug' => 'he-thong-anh-sang'
        )
    );
    
    foreach ($categories as $slug => $data) {
        if (!term_exists($slug, 'product_cat')) {
            wp_insert_term($data['name'], 'product_cat', array(
                'description' => $data['description'],
                'slug' => $data['slug']
            ));
        }
    }
}

/**
 * Create sample WooCommerce products
 */
function tavaled_create_woo_products() {
    // Check if WooCommerce is active
    if (!class_exists('WooCommerce')) {
        return;
    }
    
    $sample_products = array(
        // Màn hình LED products
        array(
            'title' => 'Màn hình LED Indoor P1.25',
            'content' => 'Màn hình LED Indoor với pixel pitch 1.25mm, độ phân giải cao, phù hợp cho quảng cáo trong nhà và sự kiện.',
            'excerpt' => 'Màn hình LED Indoor P1.25 với độ phân giải cao, chất lượng hình ảnh sắc nét.',
            'category' => 'man-hinh-led',
            'price' => '25000000',
            'regular_price' => '30000000',
            'sku' => 'LED-IN-P1.25',
            'badge' => 'hot',
            'featured' => true,
            'image' => 'man-hinh-led-p1.25-150x150.jpg'
        ),
        array(
            'title' => 'Màn hình LED Outdoor P3',
            'content' => 'Màn hình LED Outdoor với pixel pitch 3mm, chống nước IP65, phù hợp cho quảng cáo ngoài trời.',
            'excerpt' => 'Màn hình LED Outdoor P3 chống nước IP65, độ sáng cao.',
            'category' => 'man-hinh-led',
            'price' => '45000000',
            'regular_price' => '50000000',
            'sku' => 'LED-OUT-P3',
            'badge' => 'new',
            'featured' => true,
            'image' => 'P2-indoor-315x236.png'
        ),
        array(
            'title' => 'Màn hình LED Indoor P2',
            'content' => 'Màn hình LED Indoor với pixel pitch 2mm, giá cả hợp lý, chất lượng tốt.',
            'excerpt' => 'Màn hình LED Indoor P2 với giá cả hợp lý, chất lượng tốt.',
            'category' => 'man-hinh-led',
            'price' => '18000000',
            'regular_price' => '22000000',
            'sku' => 'LED-IN-P2',
            'badge' => 'sale',
            'featured' => false,
            'image' => 'P4-indoor-300x261.png'
        ),
        array(
            'title' => 'Màn hình LED Indoor P1.875',
            'content' => 'Màn hình LED Indoor với pixel pitch 1.875mm, độ phân giải cao, màu sắc chân thực.',
            'excerpt' => 'Màn hình LED Indoor P1.875 với độ phân giải cao, màu sắc chân thực.',
            'category' => 'man-hinh-led',
            'price' => '22000000',
            'regular_price' => '25000000',
            'sku' => 'LED-IN-P1.875',
            'badge' => '',
            'featured' => false,
            'image' => '15-600x400.png'
        ),
        
        // Hệ thống âm thanh products
        array(
            'title' => 'Loa công suất 1000W',
            'content' => 'Loa công suất cao 1000W, âm thanh mạnh mẽ, phù hợp cho sự kiện lớn.',
            'excerpt' => 'Loa công suất cao 1000W với âm thanh mạnh mẽ.',
            'category' => 'he-thong-am-thanh',
            'price' => '8500000',
            'regular_price' => '10000000',
            'sku' => 'SPK-1000W',
            'badge' => 'hot',
            'featured' => true,
            'image' => '15-100x100.png'
        ),
        array(
            'title' => 'Ampli Mixer 8 kênh',
            'content' => 'Ampli Mixer chuyên nghiệp 8 kênh, điều khiển âm thanh dễ dàng.',
            'excerpt' => 'Ampli Mixer chuyên nghiệp 8 kênh với điều khiển dễ dàng.',
            'category' => 'he-thong-am-thanh',
            'price' => '12000000',
            'regular_price' => '15000000',
            'sku' => 'AMP-MIX-8',
            'badge' => 'new',
            'featured' => true,
            'image' => 'P3-indoor-100x100.png'
        ),
        array(
            'title' => 'Micro không dây UHF',
            'content' => 'Micro không dây UHF, tầm phủ sóng xa, âm thanh rõ ràng.',
            'excerpt' => 'Micro không dây UHF với tầm phủ sóng xa.',
            'category' => 'he-thong-am-thanh',
            'price' => '3500000',
            'regular_price' => '4000000',
            'sku' => 'MIC-UHF',
            'badge' => 'sale',
            'featured' => false,
            'image' => '24-150x150.png'
        ),
        array(
            'title' => 'Loa treo tường 200W',
            'content' => 'Loa treo tường 200W, thiết kế nhỏ gọn, âm thanh chất lượng.',
            'excerpt' => 'Loa treo tường 200W với thiết kế nhỏ gọn.',
            'category' => 'he-thong-am-thanh',
            'price' => '2800000',
            'regular_price' => '3200000',
            'sku' => 'SPK-WALL-200W',
            'badge' => '',
            'featured' => false,
            'image' => '9-600x450.png'
        ),
        
        // Hệ thống ánh sáng products
        array(
            'title' => 'Đèn LED Panel 60x60',
            'content' => 'Đèn LED Panel 60x60cm, tiết kiệm điện, ánh sáng tự nhiên.',
            'excerpt' => 'Đèn LED Panel 60x60cm với ánh sáng tự nhiên.',
            'category' => 'he-thong-anh-sang',
            'price' => '450000',
            'regular_price' => '550000',
            'sku' => 'LED-PANEL-60',
            'badge' => 'hot',
            'featured' => true,
            'image' => '22-1024x1024.png'
        ),
        array(
            'title' => 'Đèn LED Downlight 12W',
            'content' => 'Đèn LED Downlight 12W, thiết kế hiện đại, tiết kiệm điện.',
            'excerpt' => 'Đèn LED Downlight 12W với thiết kế hiện đại.',
            'category' => 'he-thong-anh-sang',
            'price' => '180000',
            'regular_price' => '220000',
            'sku' => 'LED-DOWN-12W',
            'badge' => 'new',
            'featured' => true,
            'image' => 'z5269811675585_8a11ff8375271554f0e72f06f05fa9dd-400x400.jpg'
        ),
        array(
            'title' => 'Đèn LED Tube T8 18W',
            'content' => 'Đèn LED Tube T8 18W, thay thế đèn huỳnh quang, tiết kiệm 70% điện.',
            'excerpt' => 'Đèn LED Tube T8 18W thay thế đèn huỳnh quang.',
            'category' => 'he-thong-anh-sang',
            'price' => '85000',
            'regular_price' => '120000',
            'sku' => 'LED-TUBE-T8-18W',
            'badge' => 'sale',
            'featured' => false,
            'image' => '15-600x400.png'
        ),
        array(
            'title' => 'Đèn LED Bulb 9W',
            'content' => 'Đèn LED Bulb 9W, ánh sáng trắng, tuổi thọ cao.',
            'excerpt' => 'Đèn LED Bulb 9W với tuổi thọ cao.',
            'category' => 'he-thong-anh-sang',
            'price' => '65000',
            'regular_price' => '80000',
            'sku' => 'LED-BULB-9W',
            'badge' => '',
            'featured' => false,
            'image' => 'P2-indoor-315x236.png'
        )
    );
    
    foreach ($sample_products as $product_data) {
        // Check if product already exists
        $existing_products = wc_get_products(array(
            'sku' => $product_data['sku'],
            'limit' => 1
        ));
        
        if (!empty($existing_products)) {
            continue;
        }
        
        // Create product
        $product = new WC_Product_Simple();
        $product->set_name($product_data['title']);
        $product->set_description($product_data['content']);
        $product->set_short_description($product_data['excerpt']);
        $product->set_sku($product_data['sku']);
        $product->set_regular_price($product_data['regular_price']);
        $product->set_sale_price($product_data['price']);
        $product->set_status('publish');
        
        // Set category
        $category_term = get_term_by('slug', $product_data['category'], 'product_cat');
        if ($category_term) {
            $product->set_category_ids(array($category_term->term_id));
        }
        
        // Set featured
        if ($product_data['featured']) {
            $product->set_featured(true);
        }
        
        // Save product
        $product_id = $product->save();
        
        if ($product_id) {
            // Set product image if exists
            $upload_dir = wp_upload_dir();
            $image_path = $upload_dir['basedir'] . '/2025/08/' . $product_data['image'];
            
            if (file_exists($image_path)) {
                $attachment_id = tavaled_upload_image_from_path($image_path, $product_id);
                if ($attachment_id) {
                    $product->set_image_id($attachment_id);
                    $product->save();
                }
            }
            
            // Set product badge as meta
            if ($product_data['badge']) {
                update_post_meta($product_id, '_product_badge', $product_data['badge']);
            }
        }
    }
}

/**
 * Upload image from file path
 */
function tavaled_upload_image_from_path($file_path, $product_id) {
    if (!file_exists($file_path)) {
        return false;
    }
    
    $file_name = basename($file_path);
    $upload_dir = wp_upload_dir();
    
    // Check if file already exists in media library
    $existing_attachment = get_page_by_title($file_name, OBJECT, 'attachment');
    if ($existing_attachment) {
        return $existing_attachment->ID;
    }
    
    // Prepare file array for wp_handle_sideload
    $file = array(
        'name' => $file_name,
        'type' => mime_content_type($file_path),
        'tmp_name' => $file_path,
        'error' => 0,
        'size' => filesize($file_path)
    );
    
    // Move file to uploads directory
    $upload = wp_handle_sideload($file, array('test_form' => false));
    
    if (!isset($upload['error'])) {
        $attachment = array(
            'post_mime_type' => $upload['type'],
            'post_title' => preg_replace('/\.[^.]+$/', '', $file_name),
            'post_content' => '',
            'post_status' => 'inherit'
        );
        
        $attachment_id = wp_insert_attachment($attachment, $upload['file'], $product_id);
        
        if (!is_wp_error($attachment_id)) {
            require_once(ABSPATH . 'wp-admin/includes/image.php');
            $attachment_data = wp_generate_attachment_metadata($attachment_id, $upload['file']);
            wp_update_attachment_metadata($attachment_id, $attachment_data);
            return $attachment_id;
        }
    }
    
    return false;
}

/**
 * Initialize WooCommerce sample data
 */
function tavaled_init_woo_sample_data() {
    // Only run once
    if (get_option('tavaled_woo_sample_data_created')) {
        return;
    }
    
    tavaled_create_woo_categories();
    tavaled_create_woo_products();
    
    update_option('tavaled_woo_sample_data_created', true);
}

// Run sample data creation on theme activation
add_action('after_switch_theme', 'tavaled_init_woo_sample_data');

// Also run when WooCommerce is activated
add_action('woocommerce_activated', 'tavaled_init_woo_sample_data');

// Manual trigger for development
if (isset($_GET['create_woo_sample_data']) && current_user_can('manage_options')) {
    add_action('init', 'tavaled_init_woo_sample_data');
} 