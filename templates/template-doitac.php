<?php
/**
 * Template Name: Partners
 * Description: Template for Partners/Brands page
 *
 * @package TavaLED
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <!-- Page Header -->
        <div class="page-header">
            <div class="container">
                <?php tavaled_breadcrumbs(); ?>
                <h1 class="page-title"><?php the_title(); ?></h1>
            </div>
        </div>
        
        <?php while (have_posts()) : the_post(); ?>
            
            <!-- Page Content -->
            <?php if (get_the_content()) : ?>
                <section class="page-content section">
                    <div class="container">
                        <div class="content-wrapper">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            
            <!-- Partners Grid -->
            <section class="partners-grid-section section">
                <div class="container">
                    <div class="section-title text-center">
                        <h2><?php esc_html_e('Đối tác của chúng tôi', 'tavaled-theme'); ?></h2>
                        <p><?php esc_html_e('Chúng tôi tự hào hợp tác với các thương hiệu hàng đầu', 'tavaled-theme'); ?></p>
                    </div>
                    
                    <div class="partners-grid grid grid-4">
                        <?php
                        // You can use ACF repeater field or custom post type for partners
                        // For demo purposes, we'll use the brand taxonomy
                        $brands = get_terms(array(
                            'taxonomy' => 'thuong-hieu',
                            'hide_empty' => false,
                        ));
                        
                        if (!empty($brands) && !is_wp_error($brands)) :
                            foreach ($brands as $brand) :
                                $logo = get_field('logo', $brand); // Assuming ACF field
                                $website = get_field('website', $brand);
                                ?>
                                <div class="partner-item glass-card">
                                    <?php if ($website) : ?>
                                        <a href="<?php echo esc_url($website); ?>" target="_blank" rel="noopener noreferrer">
                                    <?php endif; ?>
                                    
                                    <?php if ($logo) : ?>
                                        <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($brand->name); ?>">
                                    <?php else : ?>
                                        <div class="partner-name">
                                            <h4><?php echo esc_html($brand->name); ?></h4>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <?php if ($website) : ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
            </section>
            
            <!-- Clients Section -->
            <section class="clients-section section">
                <div class="container">
                    <div class="section-title text-center">
                        <h2><?php esc_html_e('Khách hàng tiêu biểu', 'tavaled-theme'); ?></h2>
                        <p><?php esc_html_e('Những khách hàng đã tin tưởng và sử dụng sản phẩm của chúng tôi', 'tavaled-theme'); ?></p>
                    </div>
                    
                    <div class="clients-logos">
                        <div class="clients-slider">
                            <?php
                            // You can use ACF repeater field for client logos
                            // This is a placeholder for the slider
                            ?>
                            <div class="client-logo">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/client-placeholder.png'); ?>" alt="Client">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Testimonials -->
            <section class="testimonials-section section">
                <div class="container">
                    <div class="section-title text-center">
                        <h2><?php esc_html_e('Khách hàng nói gì về chúng tôi', 'tavaled-theme'); ?></h2>
                    </div>
                    
                    <div class="testimonials-grid grid grid-3">
                        <?php
                        // You can use ACF repeater field or custom post type for testimonials
                        // For demo purposes, we'll create static testimonials
                        $testimonials = array(
                            array(
                                'name' => 'Nguyễn Văn A',
                                'position' => 'Giám đốc Công ty ABC',
                                'content' => 'Sản phẩm chất lượng cao, dịch vụ tốt. Chúng tôi rất hài lòng khi hợp tác với TavaLED.',
                                'rating' => 5
                            ),
                            array(
                                'name' => 'Trần Thị B',
                                'position' => 'Chủ đầu tư Dự án XYZ',
                                'content' => 'Đội ngũ chuyên nghiệp, tư vấn nhiệt tình. Giải pháp chiếu sáng đáp ứng đúng yêu cầu.',
                                'rating' => 5
                            ),
                            array(
                                'name' => 'Lê Văn C',
                                'position' => 'Kiến trúc sư',
                                'content' => 'TavaLED luôn cập nhật công nghệ mới, mang lại giải pháp tiết kiệm năng lượng hiệu quả.',
                                'rating' => 5
                            ),
                        );
                        
                        foreach ($testimonials as $testimonial) :
                            ?>
                            <div class="testimonial-card glass-card">
                                <div class="testimonial-content">
                                    <div class="quote-icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <p><?php echo esc_html($testimonial['content']); ?></p>
                                    
                                    <div class="testimonial-rating">
                                        <?php
                                        for ($i = 1; $i <= 5; $i++) :
                                            if ($i <= $testimonial['rating']) :
                                                echo '<i class="fas fa-star"></i>';
                                            else :
                                                echo '<i class="far fa-star"></i>';
                                            endif;
                                        endfor;
                                        ?>
                                    </div>
                                </div>
                                
                                <div class="testimonial-author">
                                    <h4><?php echo esc_html($testimonial['name']); ?></h4>
                                    <p><?php echo esc_html($testimonial['position']); ?></p>
                                </div>
                            </div>
                            <?php
                        endforeach;
                        ?>
                    </div>
                </div>
            </section>
            
            <!-- Partnership Benefits -->
            <section class="partnership-benefits section">
                <div class="container">
                    <div class="section-title text-center">
                        <h2><?php esc_html_e('Lợi ích khi hợp tác', 'tavaled-theme'); ?></h2>
                    </div>
                    
                    <div class="benefits-grid grid grid-3">
                        <div class="benefit-item text-center animate-fadeIn">
                            <div class="benefit-icon">
                                <i class="fas fa-percentage"></i>
                            </div>
                            <h3><?php esc_html_e('Chiết khấu hấp dẫn', 'tavaled-theme'); ?></h3>
                            <p><?php esc_html_e('Chính sách giá ưu đãi cho đối tác lâu dài', 'tavaled-theme'); ?></p>
                        </div>
                        
                        <div class="benefit-item text-center animate-fadeIn">
                            <div class="benefit-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <h3><?php esc_html_e('Hỗ trợ kỹ thuật', 'tavaled-theme'); ?></h3>
                            <p><?php esc_html_e('Hỗ trợ kỹ thuật 24/7 từ đội ngũ chuyên gia', 'tavaled-theme'); ?></p>
                        </div>
                        
                        <div class="benefit-item text-center animate-fadeIn">
                            <div class="benefit-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <h3><?php esc_html_e('Chứng nhận đối tác', 'tavaled-theme'); ?></h3>
                            <p><?php esc_html_e('Chứng nhận đối tác chính thức của TavaLED', 'tavaled-theme'); ?></p>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Become Partner CTA -->
            <section class="become-partner section">
                <div class="container">
                    <div class="cta-box glass-card text-center">
                        <h2><?php esc_html_e('Trở thành đối tác của TavaLED', 'tavaled-theme'); ?></h2>
                        <p><?php esc_html_e('Hãy cùng chúng tôi mang đến giải pháp chiếu sáng tốt nhất cho khách hàng', 'tavaled-theme'); ?></p>
                        
                        <div class="cta-buttons">
                            <a href="<?php echo esc_url(home_url('/lien-he')); ?>" class="glass-button">
                                <?php esc_html_e('Đăng ký hợp tác', 'tavaled-theme'); ?>
                            </a>
                            <a href="tel:<?php echo tavaled_format_phone(tavaled_get_option('phone_number', '0123456789')); ?>" class="glass-button secondary">
                                <i class="fas fa-phone"></i>
                                <?php esc_html_e('Gọi ngay', 'tavaled-theme'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            
        <?php endwhile; ?>
        
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();