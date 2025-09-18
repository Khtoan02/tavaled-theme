<?php
/**
 * The template for displaying all single posts
 *
 * @package TavaLED
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <?php
        while (have_posts()) :
            the_post();
            
            // Track post views
            tavaled_set_post_views();
            ?>
            
            <!-- Post Header -->
            <div class="post-header">
                <div class="container">
                    <?php tavaled_breadcrumbs(); ?>
                    
                    <div class="post-meta">
                        <span class="post-date">
                            <i class="far fa-calendar"></i>
                            <?php echo get_the_date(); ?>
                        </span>
                        <span class="post-author">
                            <i class="far fa-user"></i>
                            <?php the_author(); ?>
                        </span>
                        <span class="post-category">
                            <i class="far fa-folder"></i>
                            <?php the_category(', '); ?>
                        </span>
                        <span class="post-reading-time">
                            <i class="far fa-clock"></i>
                            <?php echo tavaled_reading_time(); ?>
                        </span>
                    </div>
                    
                    <h1 class="post-title"><?php the_title(); ?></h1>
                </div>
            </div>
            
            <div class="container">
                <div class="content-wrapper">
                    <div class="primary-content">
                        <article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-thumbnail">
                                    <?php the_post_thumbnail('large'); ?>
                                </div>
                            <?php endif; ?>
                            
                            <div class="post-content">
                                <?php
                                the_content();
                                
                                wp_link_pages(array(
                                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'tavaled-theme'),
                                    'after'  => '</div>',
                                ));
                                ?>
                            </div>
                            
                            <div class="post-footer">
                                <?php if (has_tag()) : ?>
                                    <div class="post-tags">
                                        <i class="fas fa-tags"></i>
                                        <?php the_tags('', ', ', ''); ?>
                                    </div>
                                <?php endif; ?>
                                
                                <!-- Social Share -->
                                <div class="social-share">
                                    <span><?php esc_html_e('Chia sẻ:', 'tavaled-theme'); ?></span>
                                    <?php
                                    $share_links = tavaled_social_share();
                                    foreach ($share_links as $platform => $url) :
                                        ?>
                                        <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer" class="share-<?php echo esc_attr($platform); ?>">
                                            <i class="fab fa-<?php echo esc_attr($platform); ?>"></i>
                                        </a>
                                        <?php
                                    endforeach;
                                    ?>
                                </div>
                            </div>
                        </article>
                        
                        <!-- Post Navigation -->
                        <nav class="post-navigation">
                            <?php
                            the_post_navigation(array(
                                'prev_text' => '<span class="nav-subtitle">' . esc_html__('Bài trước', 'tavaled-theme') . '</span> <span class="nav-title">%title</span>',
                                'next_text' => '<span class="nav-subtitle">' . esc_html__('Bài sau', 'tavaled-theme') . '</span> <span class="nav-title">%title</span>',
                            ));
                            ?>
                        </nav>
                        
                        <!-- Related Posts -->
                        <?php
                        $related_posts = tavaled_get_related_posts();
                        if ($related_posts && $related_posts->have_posts()) :
                            ?>
                            <section class="related-posts">
                                <h3><?php esc_html_e('Bài viết liên quan', 'tavaled-theme'); ?></h3>
                                <div class="related-posts-grid grid grid-3">
                                    <?php
                                    while ($related_posts->have_posts()) :
                                        $related_posts->the_post();
                                        get_template_part('template-parts/content', get_post_type());
                                    endwhile;
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </section>
                            <?php
                        endif;
                        ?>
                        
                        <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        ?>
                    </div><!-- .primary-content -->
                    
                    <?php if (tavaled_has_sidebar()) : ?>
                        <aside class="sidebar-content">
                            <?php get_sidebar(); ?>
                        </aside>
                    <?php endif; ?>
                </div><!-- .content-wrapper -->
            </div><!-- .container -->
            
            <?php
        endwhile; // End of the loop.
        ?>
        
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();