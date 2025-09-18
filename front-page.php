<?php
/**
 * The front page template file
 *
 * @package TavaLED
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-background">
                <div class="hero-overlay"></div>
            </div>
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text">
                        <div class="hero-badge">
                            <i class="fas fa-star"></i>
                            <span>Giải pháp LED hàng đầu Việt Nam</span>
                        </div>
                        <h1 class="hero-title">
                            <span class="title-highlight">TavaLED</span> - 
                            <span class="title-main">Giải pháp chiếu sáng thông minh</span>
                        </h1>
                        <p class="hero-subtitle">
                            Chúng tôi cung cấp <strong>giải pháp LED toàn diện</strong> với công nghệ tiên tiến, 
                            <strong>tiết kiệm năng lượng</strong> và <strong>thân thiện môi trường</strong> cho mọi không gian
                        </p>
                        
                        <div class="hero-usps">
                            <div class="usp-item">
                                <div class="usp-icon">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div class="usp-content">
                                    <h4>Chất lượng đỉnh cao</h4>
                                    <p>Sản phẩm đạt chuẩn quốc tế ISO 9001</p>
                                </div>
                            </div>
                            <div class="usp-item">
                                <div class="usp-icon">
                                    <i class="fas fa-leaf"></i>
                                </div>
                                <div class="usp-content">
                                    <h4>Tiết kiệm 70% điện</h4>
                                    <p>So với đèn truyền thống, tuổi thọ 50,000 giờ</p>
                                </div>
                            </div>
                            <div class="usp-item">
                                <div class="usp-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div class="usp-content">
                                    <h4>Bảo hành 3 năm</h4>
                                    <p>Hỗ trợ 24/7, dịch vụ sau bán hàng tận tâm</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="hero-actions">
                            <a href="<?php echo esc_url(home_url('/san-pham')); ?>" class="btn-primary">
                                <i class="fas fa-eye"></i>
                                <span>Khám phá sản phẩm</span>
                            </a>
                            <a href="#contact-popup" class="btn-secondary popup-trigger">
                                <i class="fas fa-calculator"></i>
                                <span>Nhận báo giá miễn phí</span>
                            </a>
                        </div>
                        
                        <div class="hero-trust">
                            <div class="trust-item">
                                <i class="fas fa-users"></i>
                                <span>500+ Khách hàng tin tưởng</span>
                            </div>
                            <div class="trust-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Toàn quốc - 24/7</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="hero-visual">
                        <div class="hero-showcase">
                            <div class="showcase-main">
                                <div class="showcase-item featured">
                                    <div class="showcase-image">
                                        <img src="https://channel.mediacdn.vn/428462621602512896/2024/1/8/photo-1-1704700996370761002934.jpg" alt="Màn hình LED Indoor">
                                    </div>
                                    <div class="showcase-label">
                                        <i class="fas fa-tv"></i>
                                        <span>Màn hình LED Indoor</span>
                                    </div>
                                </div>
                                <div class="showcase-item">
                                    <div class="showcase-image">
                                        <img src="https://phucthanhnhan.com/contents_images/images/kich-thuoc-man-hinh-led-2.jpg" alt="Màn hình LED Outdoor">
                                    </div>
                                    <div class="showcase-label">
                                        <i class="fas fa-sun"></i>
                                        <span>LED Outdoor</span>
                                    </div>
                                </div>
                                <div class="showcase-item">
                                    <div class="showcase-image">
                                        <img src="https://ledvietking.com.vn/wp-content/uploads/2020/05/man-hinh-led-fashion-tv-show.jpg" alt="Màn hình LED Outdoor">
                                    </div>
                                    <div class="showcase-label">
                                        <i class="fas fa-sun"></i>
                                        <span>LED Outdoor</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="hero-stats">
                                <div class="stat-item">
                                    <div class="stat-number" data-count="500">0</div>
                                    <div class="stat-label">Dự án hoàn thành</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number" data-count="50">0</div>
                                    <div class="stat-label">Đối tác tin cậy</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number" data-count="5">0</div>
                                    <div class="stat-label">Năm kinh nghiệm</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Solutions Section -->
        <section class="solutions-section">
            <div class="container">
                <div class="section-header">
                    <div class="section-badge">
                        <i class="fas fa-cogs"></i>
                        <span>Giải pháp chuyên nghiệp</span>
                    </div>
                    <div class="section-title">
                        <h2>Giải pháp LED toàn diện</h2>
                        <p>Chúng tôi cung cấp đầy đủ giải pháp LED chất lượng cao, đáp ứng mọi nhu cầu từ quảng cáo đến chiếu sáng thông minh</p>
                    </div>
                    <div class="section-stats">
                        <div class="stat-item">
                            <div class="stat-number">3</div>
                            <div class="stat-label">Giải pháp chính</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">100+</div>
                            <div class="stat-label">Sản phẩm đa dạng</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">24/7</div>
                            <div class="stat-label">Hỗ trợ kỹ thuật</div>
                        </div>
                    </div>
                </div>
                
                <div class="solutions-grid">
                    <div class="solution-card" data-category="display">
                        <div class="solution-header">
                            <div class="solution-icon">
                                <i class="fas fa-tv"></i>
                            </div>
                            <div class="solution-badge">Bán chạy</div>
                        </div>
                        <div class="solution-content">
                            <h3>Giải pháp hiển thị</h3>
                            <p class="solution-description">Màn hình LED chất lượng cao cho quảng cáo, sự kiện và thông tin với độ phân giải sắc nét</p>
                            
                            <div class="solution-features">
                                <div class="feature-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Màn hình LED Indoor/Outdoor</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Màn hình LED cho sân khấu</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Màn hình LED cho sự kiện</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Độ phân giải 4K Ultra HD</span>
                                </div>
                            </div>
                            
                            <div class="solution-benefits">
                                <div class="benefit-item">
                                    <i class="fas fa-bolt"></i>
                                    <span>Tiết kiệm 60% điện</span>
                                </div>
                                <div class="benefit-item">
                                    <i class="fas fa-shield-alt"></i>
                                    <span>Bảo hành 3 năm</span>
                                </div>
                            </div>
                            
                            <div class="solution-actions">
                                <a href="/giai-phap-hien-thi" class="btn-primary">
                                    <i class="fas fa-eye"></i>
                                    <span>Xem chi tiết</span>
                                </a>
                                <a href="#contact-popup" class="btn-outline popup-trigger">
                                    <i class="fas fa-calculator"></i>
                                    <span>Báo giá</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="solution-card" data-category="audio">
                        <div class="solution-header">
                            <div class="solution-icon">
                                <i class="fas fa-volume-up"></i>
                            </div>
                            <div class="solution-badge">Chuyên nghiệp</div>
                        </div>
                        <div class="solution-content">
                            <h3>Giải pháp âm thanh</h3>
                            <p class="solution-description">Hệ thống âm thanh chuyên nghiệp với công nghệ tiên tiến cho mọi không gian và sự kiện</p>
                            
                            <div class="solution-features">
                                <div class="feature-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Loa công suất cao</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Ampli và mixer chuyên nghiệp</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Hệ thống âm thanh hội trường</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Âm thanh surround 7.1</span>
                                </div>
                            </div>
                            
                            <div class="solution-benefits">
                                <div class="benefit-item">
                                    <i class="fas fa-volume-up"></i>
                                    <span>Âm thanh sắc nét</span>
                                </div>
                                <div class="benefit-item">
                                    <i class="fas fa-tools"></i>
                                    <span>Lắp đặt chuyên nghiệp</span>
                                </div>
                            </div>
                            
                            <div class="solution-actions">
                                <a href="/giai-phap-am-thanh" class="btn-primary">
                                    <i class="fas fa-eye"></i>
                                    <span>Xem chi tiết</span>
                                </a>
                                <a href="#contact-popup" class="btn-outline popup-trigger">
                                    <i class="fas fa-calculator"></i>
                                    <span>Báo giá</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="solution-card" data-category="lighting">
                        <div class="solution-header">
                            <div class="solution-icon">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <div class="solution-badge">Thông minh</div>
                        </div>
                        <div class="solution-content">
                            <h3>Giải pháp ánh sáng</h3>
                            <p class="solution-description">Chiếu sáng LED thông minh với công nghệ IoT, tiết kiệm năng lượng và thân thiện môi trường</p>
                            
                            <div class="solution-features">
                                <div class="feature-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Đèn LED công nghiệp</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Đèn LED trang trí</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Hệ thống điều khiển thông minh</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Điều khiển qua smartphone</span>
                                </div>
                            </div>
                            
                            <div class="solution-benefits">
                                <div class="benefit-item">
                                    <i class="fas fa-leaf"></i>
                                    <span>Tiết kiệm 70% điện</span>
                                </div>
                                <div class="benefit-item">
                                    <i class="fas fa-mobile-alt"></i>
                                    <span>Điều khiển từ xa</span>
                                </div>
                            </div>
                            
                            <div class="solution-actions">
                                <a href="/giai-phap-anh-sang" class="btn-primary">
                                    <i class="fas fa-eye"></i>
                                    <span>Xem chi tiết</span>
                                </a>
                                <a href="#contact-popup" class="btn-outline popup-trigger">
                                    <i class="fas fa-calculator"></i>
                                    <span>Báo giá</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="solutions-cta">
                    <div class="cta-content">
                        <h3>Không tìm thấy giải pháp phù hợp?</h3>
                        <p>Đội ngũ chuyên gia của chúng tôi sẽ tư vấn và thiết kế giải pháp riêng biệt cho dự án của bạn</p>
                        <div class="cta-actions">
                            <a href="#contact-popup" class="btn-primary popup-trigger">
                                <i class="fas fa-headset"></i>
                                <span>Tư vấn miễn phí</span>
                            </a>
                            <a href="tel:<?php echo tavaled_format_phone(tavaled_get_option('phone_number', '0123456789')); ?>" class="btn-secondary">
                                <i class="fas fa-phone"></i>
                                <span>Gọi ngay</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Featured Products Section -->
        <section class="products-section">
            <div class="container">
                <div class="section-header">
                    <div class="section-badge">
                        <i class="fas fa-star"></i>
                        <span>Sản phẩm chất lượng</span>
                    </div>
                    <div class="section-title">
                        <h2>Sản phẩm LED nổi bật</h2>
                        <p>Khám phá bộ sưu tập sản phẩm LED chất lượng cao, đa dạng mẫu mã và giá cả cạnh tranh</p>
                    </div>
                    <div class="section-stats">
                        <div class="stat-item">
                            <div class="stat-number">100+</div>
                            <div class="stat-label">Sản phẩm đa dạng</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">3</div>
                            <div class="stat-label">Danh mục chính</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">24h</div>
                            <div class="stat-label">Giao hàng nhanh</div>
                        </div>
                    </div>
                </div>
                
                <!-- Products Tabs -->
                <div class="products-tabs">
                    <div class="tabs-nav">
                        <button class="tab-btn active" data-tab="all">
                            <i class="fas fa-th-large"></i>
                            <span>Tất cả sản phẩm</span>
                        </button>
                        <button class="tab-btn" data-tab="man-hinh-led">
                            <i class="fas fa-tv"></i>
                            <span>Màn hình LED</span>
                        </button>
                        <button class="tab-btn" data-tab="he-thong-am-thanh">
                            <i class="fas fa-volume-up"></i>
                            <span>Âm thanh</span>
                        </button>
                        <button class="tab-btn" data-tab="he-thong-anh-sang">
                            <i class="fas fa-lightbulb"></i>
                            <span>Ánh sáng</span>
                        </button>
                    </div>
                </div>
                
                <!-- Products Carousels -->
                <?php
                // Check if WooCommerce is active
                if (class_exists('WooCommerce')) {
                    // Tab: All Products
                    $all_products_args = array(
                        'post_type' => 'product',
                        'post_status' => 'publish',
                        'posts_per_page' => 12,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                    $all_products_query = new WP_Query($all_products_args);
                    ?>
                    
                    <!-- All Products Carousel -->
                    <div class="products-carousel active" data-tab="all">
                        <div class="carousel-container">
                            <div class="carousel-track">
                                <?php
                                if ($all_products_query->have_posts()) :
                                    while ($all_products_query->have_posts()) :
                                        $all_products_query->the_post();
                                        $product = wc_get_product(get_the_ID());
                                        if (!$product) continue;
                                        
                                        // Get product data
                                        $product_id = $product->get_id();
                                        $product_title = $product->get_name();
                                        $product_price = $product->get_price();
                                        $product_image_id = $product->get_image_id();
                                        $product_image_url = $product_image_id ? wp_get_attachment_image_url($product_image_id, 'medium') : get_template_directory_uri() . '/assets/images/product-placeholder.jpg';
                                        $product_categories = wc_get_product_category_list($product_id, ', ');
                                        $category_names = wp_get_post_terms($product_id, 'product_cat', array('fields' => 'names'));
                                        
                                        // Determine badge
                                        $product_badge = '';
                                        if ($product->is_on_sale()) {
                                            $product_badge = 'sale';
                                        } elseif ($product->is_featured()) {
                                            $product_badge = 'hot';
                                        } elseif (strtotime($product->get_date_created()) > strtotime('-30 days')) {
                                            $product_badge = 'new';
                                        }
                                        ?>
                                        <div class="product-card">
                                            <div class="product-header">
                                                <?php if ($product_badge) : ?>
                                                    <div class="product-badge">
                                                        <?php if ($product_badge === 'hot') : ?>
                                                            <span class="badge-hot">Bán chạy</span>
                                                        <?php elseif ($product_badge === 'new') : ?>
                                                            <span class="badge-new">Mới</span>
                                                        <?php elseif ($product_badge === 'sale') : ?>
                                                            <span class="badge-sale">Giảm giá</span>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="product-wishlist">
                                                    <button class="wishlist-btn" title="Thêm vào yêu thích">
                                                        <i class="far fa-heart"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            
                                            <div class="product-image">
                                                <a href="<?php echo esc_url($product->get_permalink()); ?>">
                                                    <img src="<?php echo esc_url($product_image_url); ?>" alt="<?php echo esc_attr($product_title); ?>">
                                                </a>
                                                <div class="product-overlay">
                                                    <div class="product-actions">
                                                        <a href="<?php echo esc_url($product->get_permalink()); ?>" class="action-btn" title="Xem chi tiết">
                                                            <i class="fas fa-eye"></i>
                                                            <span>Xem chi tiết</span>
                                                        </a>
                                                        <a href="#contact-popup" class="action-btn popup-trigger" title="Báo giá">
                                                            <i class="fas fa-calculator"></i>
                                                            <span>Báo giá</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="product-content">
                                                <div class="product-category">
                                                    <i class="fas fa-tag"></i>
                                                    <span><?php echo !empty($category_names) ? esc_html($category_names[0]) : 'Sản phẩm LED'; ?></span>
                                                </div>
                                                
                                                <h3 class="product-title">
                                                    <a href="<?php echo esc_url($product->get_permalink()); ?>"><?php echo esc_html($product_title); ?></a>
                                                </h3>
                                                
                                                <p class="product-description"><?php echo wp_trim_words($product->get_short_description() ?: $product->get_description(), 15); ?></p>
                                                
                                            </div>
                                        </div>
                                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                                ?>
                            </div>
                            
                        </div>

                        <button class="carousel-nav prev-btn" aria-label="Previous">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        
                        <button class="carousel-nav next-btn" aria-label="Next">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                    
                    <?php
                    // Tab: Màn hình LED
                    $led_products_args = array(
                        'post_type' => 'product',
                        'post_status' => 'publish',
                        'posts_per_page' => 12,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'slug',
                                'terms' => 'man-hinh-led'
                            )
                        )
                    );
                    $led_products_query = new WP_Query($led_products_args);
                    ?>
                    
                    <!-- LED Products Carousel -->
                    <div class="products-carousel" data-tab="man-hinh-led">
                        <div class="carousel-container">
                            <div class="carousel-track">
                                <?php
                                if ($led_products_query->have_posts()) :
                                    while ($led_products_query->have_posts()) :
                                        $led_products_query->the_post();
                                        $product = wc_get_product(get_the_ID());
                                        if (!$product) continue;
                                        
                                        // Get product data
                                        $product_id = $product->get_id();
                                        $product_title = $product->get_name();
                                        $product_price = $product->get_price();
                                        $product_image_id = $product->get_image_id();
                                        $product_image_url = $product_image_id ? wp_get_attachment_image_url($product_image_id, 'medium') : get_template_directory_uri() . '/assets/images/product-placeholder.jpg';
                                        $product_categories = wc_get_product_category_list($product_id, ', ');
                                        $category_names = wp_get_post_terms($product_id, 'product_cat', array('fields' => 'names'));
                                        
                                        // Determine badge
                                        $product_badge = '';
                                        if ($product->is_on_sale()) {
                                            $product_badge = 'sale';
                                        } elseif ($product->is_featured()) {
                                            $product_badge = 'hot';
                                        } elseif (strtotime($product->get_date_created()) > strtotime('-30 days')) {
                                            $product_badge = 'new';
                                        }
                                        ?>
                                        <div class="product-card">
                                            <div class="product-header">
                                                <?php if ($product_badge) : ?>
                                                    <div class="product-badge">
                                                        <?php if ($product_badge === 'hot') : ?>
                                                            <span class="badge-hot">Bán chạy</span>
                                                        <?php elseif ($product_badge === 'new') : ?>
                                                            <span class="badge-new">Mới</span>
                                                        <?php elseif ($product_badge === 'sale') : ?>
                                                            <span class="badge-sale">Giảm giá</span>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="product-wishlist">
                                                    <button class="wishlist-btn" title="Thêm vào yêu thích">
                                                        <i class="far fa-heart"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            
                                            <div class="product-image">
                                                <a href="<?php echo esc_url($product->get_permalink()); ?>">
                                                    <img src="<?php echo esc_url($product_image_url); ?>" alt="<?php echo esc_attr($product_title); ?>">
                                                </a>
                                                <div class="product-overlay">
                                                    <div class="product-actions">
                                                        <a href="<?php echo esc_url($product->get_permalink()); ?>" class="action-btn" title="Xem chi tiết">
                                                            <i class="fas fa-eye"></i>
                                                            <span>Xem chi tiết</span>
                                                        </a>
                                                        <a href="#contact-popup" class="action-btn popup-trigger" title="Báo giá">
                                                            <i class="fas fa-calculator"></i>
                                                            <span>Báo giá</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="product-content">
                                                <div class="product-category">
                                                    <i class="fas fa-tag"></i>
                                                    <span><?php echo !empty($category_names) ? esc_html($category_names[0]) : 'Màn hình LED'; ?></span>
                                                </div>
                                                
                                                <h3 class="product-title">
                                                    <a href="<?php echo esc_url($product->get_permalink()); ?>"><?php echo esc_html($product_title); ?></a>
                                                </h3>
                                                
                                                <p class="product-description"><?php echo wp_trim_words($product->get_short_description() ?: $product->get_description(), 15); ?></p>
                                                
                                                <div class="product-footer">
                                                    <?php if ($product_price) : ?>
                                                        <div class="product-price">
                                                            <span class="price-current"><?php echo $product->get_price_html(); ?></span>
                                                        </div>
                                                    <?php endif; ?>
                                                    
                                                    <div class="product-actions">
                                                        <a href="<?php echo esc_url($product->get_permalink()); ?>" class="btn-primary btn-sm">
                                                            <i class="fas fa-eye"></i>
                                                            <span>Chi tiết</span>
                                                        </a>
                                                        <a href="#contact-popup" class="btn-outline btn-sm popup-trigger">
                                                            <i class="fas fa-calculator"></i>
                                                            <span>Báo giá</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                else : ?>
                                    <div class="no-products-message">
                                        <p>Chưa có sản phẩm màn hình LED nào.</p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <!-- Navigation Buttons -->
                        <button class="carousel-nav prev-btn" aria-label="Previous">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="carousel-nav next-btn" aria-label="Next">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                    
                    <?php
                    // Tab: Hệ thống âm thanh
                    $audio_products_args = array(
                        'post_type' => 'product',
                        'post_status' => 'publish',
                        'posts_per_page' => 12,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'slug',
                                'terms' => 'he-thong-am-thanh'
                            )
                        )
                    );
                    $audio_products_query = new WP_Query($audio_products_args);
                    ?>
                    
                    <!-- Audio Products Carousel -->
                    <div class="products-carousel" data-tab="he-thong-am-thanh">
                        <div class="carousel-container">
                            <div class="carousel-track">
                                <?php
                                if ($audio_products_query->have_posts()) :
                                    while ($audio_products_query->have_posts()) :
                                        $audio_products_query->the_post();
                                        $product = wc_get_product(get_the_ID());
                                        if (!$product) continue;
                                        
                                        // Get product data
                                        $product_id = $product->get_id();
                                        $product_title = $product->get_name();
                                        $product_price = $product->get_price();
                                        $product_image_id = $product->get_image_id();
                                        $product_image_url = $product_image_id ? wp_get_attachment_image_url($product_image_id, 'medium') : get_template_directory_uri() . '/assets/images/product-placeholder.jpg';
                                        $product_categories = wc_get_product_category_list($product_id, ', ');
                                        $category_names = wp_get_post_terms($product_id, 'product_cat', array('fields' => 'names'));
                                        
                                        // Determine badge
                                        $product_badge = '';
                                        if ($product->is_on_sale()) {
                                            $product_badge = 'sale';
                                        } elseif ($product->is_featured()) {
                                            $product_badge = 'hot';
                                        } elseif (strtotime($product->get_date_created()) > strtotime('-30 days')) {
                                            $product_badge = 'new';
                                        }
                                        ?>
                                        <div class="product-card">
                                            <div class="product-header">
                                                <?php if ($product_badge) : ?>
                                                    <div class="product-badge">
                                                        <?php if ($product_badge === 'hot') : ?>
                                                            <span class="badge-hot">Bán chạy</span>
                                                        <?php elseif ($product_badge === 'new') : ?>
                                                            <span class="badge-new">Mới</span>
                                                        <?php elseif ($product_badge === 'sale') : ?>
                                                            <span class="badge-sale">Giảm giá</span>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="product-wishlist">
                                                    <button class="wishlist-btn" title="Thêm vào yêu thích">
                                                        <i class="far fa-heart"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            
                                            <div class="product-image">
                                                <a href="<?php echo esc_url($product->get_permalink()); ?>">
                                                    <img src="<?php echo esc_url($product_image_url); ?>" alt="<?php echo esc_attr($product_title); ?>">
                                                </a>
                                                <div class="product-overlay">
                                                    <div class="product-actions">
                                                        <a href="<?php echo esc_url($product->get_permalink()); ?>" class="action-btn" title="Xem chi tiết">
                                                            <i class="fas fa-eye"></i>
                                                            <span>Xem chi tiết</span>
                                                        </a>
                                                        <a href="#contact-popup" class="action-btn popup-trigger" title="Báo giá">
                                                            <i class="fas fa-calculator"></i>
                                                            <span>Báo giá</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="product-content">
                                                <div class="product-category">
                                                    <i class="fas fa-tag"></i>
                                                    <span><?php echo !empty($category_names) ? esc_html($category_names[0]) : 'Hệ thống âm thanh'; ?></span>
                                                </div>
                                                
                                                <h3 class="product-title">
                                                    <a href="<?php echo esc_url($product->get_permalink()); ?>"><?php echo esc_html($product_title); ?></a>
                                                </h3>
                                                
                                                <p class="product-description"><?php echo wp_trim_words($product->get_short_description() ?: $product->get_description(), 15); ?></p>
                                                
                                                <div class="product-footer">
                                                    <?php if ($product_price) : ?>
                                                        <div class="product-price">
                                                            <span class="price-current"><?php echo $product->get_price_html(); ?></span>
                                                        </div>
                                                    <?php endif; ?>
                                                    
                                                    <div class="product-actions">
                                                        <a href="<?php echo esc_url($product->get_permalink()); ?>" class="btn-primary btn-sm">
                                                            <i class="fas fa-eye"></i>
                                                            <span>Chi tiết</span>
                                                        </a>
                                                        <a href="#contact-popup" class="btn-outline btn-sm popup-trigger">
                                                            <i class="fas fa-calculator"></i>
                                                            <span>Báo giá</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                else : ?>
                                    <div class="no-products-message">
                                        <p>Chưa có sản phẩm âm thanh nào.</p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <!-- Navigation Buttons -->
                        <button class="carousel-nav prev-btn" aria-label="Previous">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="carousel-nav next-btn" aria-label="Next">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                    
                    <?php
                    // Tab: Hệ thống ánh sáng
                    $lighting_products_args = array(
                        'post_type' => 'product',
                        'post_status' => 'publish',
                        'posts_per_page' => 12,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'slug',
                                'terms' => 'he-thong-anh-sang'
                            )
                        )
                    );
                    $lighting_products_query = new WP_Query($lighting_products_args);
                    ?>
                    
                    <!-- Lighting Products Carousel -->
                    <div class="products-carousel" data-tab="he-thong-anh-sang">
                        <div class="carousel-container">
                            <div class="carousel-track">
                                <?php
                                if ($lighting_products_query->have_posts()) :
                                    while ($lighting_products_query->have_posts()) :
                                        $lighting_products_query->the_post();
                                        $product = wc_get_product(get_the_ID());
                                        if (!$product) continue;
                                        
                                        // Get product data
                                        $product_id = $product->get_id();
                                        $product_title = $product->get_name();
                                        $product_price = $product->get_price();
                                        $product_image_id = $product->get_image_id();
                                        $product_image_url = $product_image_id ? wp_get_attachment_image_url($product_image_id, 'medium') : get_template_directory_uri() . '/assets/images/product-placeholder.jpg';
                                        $product_categories = wc_get_product_category_list($product_id, ', ');
                                        $category_names = wp_get_post_terms($product_id, 'product_cat', array('fields' => 'names'));
                                        
                                        // Determine badge
                                        $product_badge = '';
                                        if ($product->is_on_sale()) {
                                            $product_badge = 'sale';
                                        } elseif ($product->is_featured()) {
                                            $product_badge = 'hot';
                                        } elseif (strtotime($product->get_date_created()) > strtotime('-30 days')) {
                                            $product_badge = 'new';
                                        }
                                        ?>
                                        <div class="product-card">
                                            <div class="product-header">
                                                <?php if ($product_badge) : ?>
                                                    <div class="product-badge">
                                                        <?php if ($product_badge === 'hot') : ?>
                                                            <span class="badge-hot">Bán chạy</span>
                                                        <?php elseif ($product_badge === 'new') : ?>
                                                            <span class="badge-new">Mới</span>
                                                        <?php elseif ($product_badge === 'sale') : ?>
                                                            <span class="badge-sale">Giảm giá</span>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="product-wishlist">
                                                    <button class="wishlist-btn" title="Thêm vào yêu thích">
                                                        <i class="far fa-heart"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            
                                            <div class="product-image">
                                                <a href="<?php echo esc_url($product->get_permalink()); ?>">
                                                    <img src="<?php echo esc_url($product_image_url); ?>" alt="<?php echo esc_attr($product_title); ?>">
                                                </a>
                                                <div class="product-overlay">
                                                    <div class="product-actions">
                                                        <a href="<?php echo esc_url($product->get_permalink()); ?>" class="action-btn" title="Xem chi tiết">
                                                            <i class="fas fa-eye"></i>
                                                            <span>Xem chi tiết</span>
                                                        </a>
                                                        <a href="#contact-popup" class="action-btn popup-trigger" title="Báo giá">
                                                            <i class="fas fa-calculator"></i>
                                                            <span>Báo giá</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="product-content">
                                                <div class="product-category">
                                                    <i class="fas fa-tag"></i>
                                                    <span><?php echo !empty($category_names) ? esc_html($category_names[0]) : 'Hệ thống ánh sáng'; ?></span>
                                                </div>
                                                
                                                <h3 class="product-title">
                                                    <a href="<?php echo esc_url($product->get_permalink()); ?>"><?php echo esc_html($product_title); ?></a>
                                                </h3>
                                                
                                                <p class="product-description"><?php echo wp_trim_words($product->get_short_description() ?: $product->get_description(), 15); ?></p>
                                                
                                                <div class="product-footer">
                                                    <?php if ($product_price) : ?>
                                                        <div class="product-price">
                                                            <span class="price-current"><?php echo $product->get_price_html(); ?></span>
                                                        </div>
                                                    <?php endif; ?>
                                                    
                                                    <div class="product-actions">
                                                        <a href="<?php echo esc_url($product->get_permalink()); ?>" class="btn-primary btn-sm">
                                                            <i class="fas fa-eye"></i>
                                                            <span>Chi tiết</span>
                                                        </a>
                                                        <a href="#contact-popup" class="btn-outline btn-sm popup-trigger">
                                                            <i class="fas fa-calculator"></i>
                                                            <span>Báo giá</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                else : ?>
                                    <div class="no-products-message">
                                        <p>Chưa có sản phẩm ánh sáng nào.</p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <!-- Navigation Buttons -->
                        <button class="carousel-nav prev-btn" aria-label="Previous">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="carousel-nav next-btn" aria-label="Next">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                    
                <?php } else { ?>
                    <div class="no-products-message">
                        <p>WooCommerce chưa được kích hoạt. Vui lòng cài đặt và kích hoạt WooCommerce plugin.</p>
                    </div>
                <?php } ?>
                
                <div class="products-cta">
                    <div class="cta-content">
                        <h3>Không tìm thấy sản phẩm phù hợp?</h3>
                        <p>Liên hệ ngay để được tư vấn và nhận báo giá chi tiết cho dự án của bạn</p>
                        <div class="cta-actions">
                            <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>" class="btn-primary">
                                <i class="fas fa-th-large"></i>
                                <span>Xem tất cả sản phẩm</span>
                            </a>
                            <a href="#contact-popup" class="btn-secondary popup-trigger">
                                <i class="fas fa-headset"></i>
                                <span>Tư vấn miễn phí</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Projects Section -->
        <section class="section projects-section">
            <div class="container">
                <div class="section-title animate-fadeIn">
                    <h2><?php esc_html_e('Dự án tiêu biểu', 'tavaled-theme'); ?></h2>
                    <p><?php esc_html_e('Những công trình đã thực hiện', 'tavaled-theme'); ?></p>
                </div>
                
                <?php
                $projects = new WP_Query(array(
                    'post_type' => 'du-an',
                    'posts_per_page' => 6,
                    'meta_key' => '_featured',
                    'meta_value' => 'yes',
                ));
                
                if ($projects->have_posts()) :
                    ?>
                    <div class="projects-grid grid grid-3">
                        <?php
                        while ($projects->have_posts()) :
                            $projects->the_post();
                            ?>
                            <article class="project-card glass-card animate-fadeIn">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="project-image">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('project-thumb'); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <div class="project-content">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <div class="project-meta">
                                        <?php
                                        $project_types = get_the_terms(get_the_ID(), 'loai-du-an');
                                        if ($project_types && !is_wp_error($project_types)) :
                                            foreach ($project_types as $type) :
                                                echo '<span class="project-type">' . esc_html($type->name) . '</span>';
                                            endforeach;
                                        endif;
                                        ?>
                                    </div>
                                    <p><?php echo tavaled_get_excerpt(20); ?></p>
                                </div>
                            </article>
                            <?php
                        endwhile;
                        ?>
                    </div>
                    <?php
                    wp_reset_postdata();
                endif;
                ?>
                
                <div class="section-cta text-center">
                    <a href="<?php echo esc_url(home_url('/du-an')); ?>" class="glass-button">
                        <?php esc_html_e('Xem tất cả dự án', 'tavaled-theme'); ?>
                    </a>
                </div>
            </div>
        </section>
        
        <!-- Why Choose Us Section -->
        <section class="section why-choose-us">
            <div class="container">
                <div class="section-title animate-fadeIn">
                    <h2><?php esc_html_e('Tại sao chọn TavaLED?', 'tavaled-theme'); ?></h2>
                </div>
                
                <div class="features-grid grid grid-4">
                    <div class="feature-item glass-card animate-fadeIn">
                        <div class="feature-icon">
                            <i class="fas fa-medal"></i>
                        </div>
                        <h3><?php esc_html_e('Chất lượng đỉnh cao', 'tavaled-theme'); ?></h3>
                        <p><?php esc_html_e('Sản phẩm đạt chuẩn quốc tế', 'tavaled-theme'); ?></p>
                    </div>
                    
                    <div class="feature-item glass-card animate-fadeIn">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3><?php esc_html_e('Đội ngũ chuyên nghiệp', 'tavaled-theme'); ?></h3>
                        <p><?php esc_html_e('Kinh nghiệm lâu năm trong ngành', 'tavaled-theme'); ?></p>
                    </div>
                    
                    <div class="feature-item glass-card animate-fadeIn">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3><?php esc_html_e('Bảo hành dài hạn', 'tavaled-theme'); ?></h3>
                        <p><?php esc_html_e('Chế độ bảo hành tốt nhất', 'tavaled-theme'); ?></p>
                    </div>
                    
                    <div class="feature-item glass-card animate-fadeIn">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3><?php esc_html_e('Hỗ trợ 24/7', 'tavaled-theme'); ?></h3>
                        <p><?php esc_html_e('Tư vấn tận tình mọi lúc', 'tavaled-theme'); ?></p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Partners Section -->
        <section class="section partners-section">
            <div class="container">
                <div class="section-title animate-fadeIn">
                    <h2><?php esc_html_e('Đối tác & Khách hàng', 'tavaled-theme'); ?></h2>
                </div>
                
                <div class="partners-slider">
                    <?php
                    // Here you would typically use a custom field or option to manage partner logos
                    // For now, we'll create a placeholder
                    ?>
                    <div class="partners-track">
                        <!-- Partner logos would go here -->
                    </div>
                </div>
            </div>
        </section>
        
        <!-- CTA Section -->
        <section class="section cta-section">
            <div class="container">
                <div class="cta-content glass-card text-center">
                    <h2><?php esc_html_e('Sẵn sàng chiếu sáng không gian của bạn?', 'tavaled-theme'); ?></h2>
                    <p><?php esc_html_e('Liên hệ ngay để nhận tư vấn miễn phí từ các chuyên gia của chúng tôi', 'tavaled-theme'); ?></p>
                    <div class="cta-buttons">
                        <a href="<?php echo esc_url(home_url('/lien-he')); ?>" class="glass-button">
                            <?php esc_html_e('Nhận tư vấn ngay', 'tavaled-theme'); ?>
                        </a>
                        <a href="tel:<?php echo tavaled_format_phone(tavaled_get_option('phone_number', '0123456789')); ?>" class="glass-button secondary">
                            <i class="fas fa-phone"></i>
                            <?php echo tavaled_get_option('phone_number', '0123 456 789'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Blog Section -->
        <section class="section blog-section">
            <div class="container">
                <div class="section-title animate-fadeIn">
                    <h2><?php esc_html_e('Tin tức & Kiến thức', 'tavaled-theme'); ?></h2>
                    <p><?php esc_html_e('Cập nhật thông tin mới nhất về ngành chiếu sáng', 'tavaled-theme'); ?></p>
                </div>
                
                <?php
                $recent_posts = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                ));
                
                if ($recent_posts->have_posts()) :
                    ?>
                    <div class="blog-grid grid grid-3">
                        <?php
                        while ($recent_posts->have_posts()) :
                            $recent_posts->the_post();
                            get_template_part('template-parts/content', get_post_type());
                        endwhile;
                        ?>
                    </div>
                    <?php
                    wp_reset_postdata();
                endif;
                ?>
                
                <div class="section-cta text-center">
                    <a href="<?php echo esc_url(home_url('/blog')); ?>" class="glass-button">
                        <?php esc_html_e('Xem tất cả bài viết', 'tavaled-theme'); ?>
                    </a>
                </div>
            </div>
        </section>
        
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();