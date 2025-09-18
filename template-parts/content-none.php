<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @package TavaLED
 */
?>

<section class="no-results not-found">
    <div class="page-content glass-card">
        <h2 class="page-title">
            <?php esc_html_e('Không tìm thấy nội dung', 'tavaled-theme'); ?>
        </h2>
        
        <?php
        if (is_home() && current_user_can('publish_posts')) :
            
            printf(
                '<p>' . wp_kses(
                    /* translators: 1: link to WP admin new post page. */
                    __('Sẵn sàng đăng bài viết đầu tiên của bạn? <a href="%1$s">Bắt đầu tại đây</a>.', 'tavaled-theme'),
                    array(
                        'a' => array(
                            'href' => array(),
                        ),
                    )
                ) . '</p>',
                esc_url(admin_url('post-new.php'))
            );
            
        elseif (is_search()) :
            ?>
            
            <p><?php esc_html_e('Xin lỗi, không có kết quả nào phù hợp với từ khóa tìm kiếm của bạn. Vui lòng thử lại với từ khóa khác.', 'tavaled-theme'); ?></p>
            
            <div class="search-form-wrapper">
                <?php get_search_form(); ?>
            </div>
            
            <h3><?php esc_html_e('Gợi ý tìm kiếm:', 'tavaled-theme'); ?></h3>
            <ul>
                <li><?php esc_html_e('Kiểm tra lại chính tả', 'tavaled-theme'); ?></li>
                <li><?php esc_html_e('Sử dụng từ khóa chung hơn', 'tavaled-theme'); ?></li>
                <li><?php esc_html_e('Thử tìm kiếm với ít từ khóa hơn', 'tavaled-theme'); ?></li>
            </ul>
            
            <?php
        else :
            ?>
            
            <p><?php esc_html_e('Có vẻ như chúng tôi không thể tìm thấy nội dung bạn đang tìm kiếm. Có thể tìm kiếm sẽ giúp ích cho bạn.', 'tavaled-theme'); ?></p>
            
            <div class="search-form-wrapper">
                <?php get_search_form(); ?>
            </div>
            
            <?php
        endif;
        ?>
        
        <div class="helpful-links">
            <h3><?php esc_html_e('Liên kết hữu ích:', 'tavaled-theme'); ?></h3>
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Trang chủ', 'tavaled-theme'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/san-pham')); ?>"><?php esc_html_e('Sản phẩm', 'tavaled-theme'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/giai-phap')); ?>"><?php esc_html_e('Giải pháp', 'tavaled-theme'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/lien-he')); ?>"><?php esc_html_e('Liên hệ', 'tavaled-theme'); ?></a></li>
            </ul>
        </div>
    </div><!-- .page-content -->
</section><!-- .no-results -->