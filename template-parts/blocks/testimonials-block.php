<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$testimonials_block = get_field('testimonials_block');
if( $testimonials_block ):       
?>
<section class="testimonials">
    <img src="<?php echo the_field('testimonial_image'); ?>" alt="">
    <div class="container">
        <div class="inner">
            <h2>Client testimonials</h2>
            <div class="testimonial-slider">
                <?php foreach( $testimonials_block as $post ): 
                    setup_postdata($post); ?>
                <div class="content">
                    <div class="rating">
                        <?php 
                        $stars = get_field('rating_stars');     
                        for( $i=1; $i<=$stars; $i++ ){ ?>
                            <img src="<?php echo get_template_directory_uri() ?>/images/star.png" alt="">
                        <?php } ?>
                    </div>
                    <p>“<?php echo get_the_content(); ?>”</p>
                    <span><?php echo get_the_title(); ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php 
wp_reset_postdata();
endif; 
?>