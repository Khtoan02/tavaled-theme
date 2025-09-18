<?php
/**
 * Template part for displaying the site footer
 *
 * @package TavaLED
 */
?>

<div class="footer-top">
    <div class="container">
        <div class="footer-columns">
            <!-- Column 1: About -->
            <div class="footer-column footer-about">
                <h3><?php esc_html_e('Về TavaLED', 'tavaled-theme'); ?></h3>
                <?php
                $footer_about = tavaled_get_option('footer_about');
                if ($footer_about) :
                    echo wpautop($footer_about);
                else :
                    ?>
                    <p><?php esc_html_e('Chúng tôi là đơn vị hàng đầu trong lĩnh vực cung cấp giải pháp chiếu sáng LED chất lượng cao.', 'tavaled-theme'); ?></p>
                    <?php
                endif;
                ?>
                
                <!-- Social Links -->
                <div class="social-links">
                    <?php
                    $social_platforms = array(
                        'facebook' => 'Facebook',
                        'youtube' => 'YouTube',
                        'linkedin' => 'LinkedIn',
                        'instagram' => 'Instagram',
                    );
                    
                    foreach ($social_platforms as $platform => $label) :
                        $url = tavaled_get_option($platform . '_url');
                        if ($url) :
                            ?>
                            <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo esc_attr($label); ?>">
                                <i class="fab fa-<?php echo esc_attr($platform); ?>"></i>
                            </a>
                            <?php
                        endif;
                    endforeach;
                    ?>
                </div>
            </div>
            
            <!-- Column 2: Quick Links -->
            <div class="footer-column footer-links">
                <h3><?php esc_html_e('Liên kết nhanh', 'tavaled-theme'); ?></h3>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_id'        => 'footer-menu',
                    'container'      => false,
                    'menu_class'     => 'footer-menu',
                    'depth'          => 1,
                    'fallback_cb'    => false,
                ));
                ?>
            </div>
            
            <!-- Column 3: Products -->
            <div class="footer-column footer-products">
                <h3><?php esc_html_e('Sản phẩm', 'tavaled-theme'); ?></h3>
                <?php
                $product_categories = get_terms(array(
                    'taxonomy' => 'danh-muc-san-pham',
                    'hide_empty' => false,
                    'number' => 6,
                ));
                
                if (!empty($product_categories) && !is_wp_error($product_categories)) :
                    echo '<ul class="product-categories">';
                    foreach ($product_categories as $category) :
                        echo '<li><a href="' . esc_url(get_term_link($category)) . '">' . esc_html($category->name) . '</a></li>';
                    endforeach;
                    echo '</ul>';
                endif;
                ?>
            </div>
            
            <!-- Column 4: Contact Info -->
            <div class="footer-column footer-contact">
                <h3><?php esc_html_e('Liên hệ', 'tavaled-theme'); ?></h3>
                <ul class="contact-info">
                    <?php
                    $address = tavaled_get_option('company_address');
                    if ($address) :
                        ?>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span><?php echo esc_html($address); ?></span>
                        </li>
                        <?php
                    endif;
                    
                    $phone = tavaled_get_option('phone_number');
                    if ($phone) :
                        ?>
                        <li>
                            <i class="fas fa-phone"></i>
                            <a href="tel:<?php echo tavaled_format_phone($phone); ?>"><?php echo esc_html($phone); ?></a>
                        </li>
                        <?php
                    endif;
                    
                    $email = tavaled_get_option('email_address');
                    if ($email) :
                        ?>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
                        </li>
                        <?php
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="footer-bottom">
    <div class="container">
        <div class="footer-bottom-content">
            <div class="copyright">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'tavaled-theme'); ?></p>
            </div>
            
            <div class="footer-links">
                <a href="<?php echo esc_url(home_url('/chinh-sach-bao-mat')); ?>"><?php esc_html_e('Chính sách bảo mật', 'tavaled-theme'); ?></a>
                <a href="<?php echo esc_url(home_url('/dieu-khoan-su-dung')); ?>"><?php esc_html_e('Điều khoản sử dụng', 'tavaled-theme'); ?></a>
            </div>
        </div>
    </div>
</div>