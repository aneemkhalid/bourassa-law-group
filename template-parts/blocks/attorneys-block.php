<?php

/**
 * Attorneys  Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

?>
<div class="attorneys">
    <h3>Our Attorneys</h3>
    
    <?php
    $select_attorneys = get_field('select_attorneys');
    if( $select_attorneys ): 
    foreach( $select_attorneys as $post ):
        setup_postdata($post);  
    ?>
    <div class="attorney">
        <div class="img-wrap">
            <img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="">
        </div>

        <div class="info">
            <h4><?php echo get_the_title($post->ID); ?></h4>

            <!-- <p>Mark J. Bourassa Esq. is the founding Member of The Bourassa Law Group. Mr. Bourassa’s practice focuses on representing....</p> -->
            <p><?php echo get_the_excerpt($post->ID);?></p>

            <a class="common-btn" href="<?php echo get_permalink($post->ID); ?>">Read full bio</a>
        </div>
    </div>
    <?php endforeach; ?>
    <?php
    wp_reset_postdata(); ?>
<?php endif; ?>
</div>

<div class="staff">
    <h3>Our Staff</h3>
    
    <?php
    $select_staff = get_field('select_staff');
    if( $select_staff ): 
    foreach( $select_staff as $post ):
        setup_postdata($post);  
    ?>
    <div class="member">
        <div class="img-wrap">
            <img src="<?php echo get_the_post_thumbnail_url($post->ID) ?>" alt="">
        </div>

        <div class="info">
            <h4><?php echo get_the_title($post->ID); ?></h4>

            <p><?php echo get_the_excerpt($post->ID);?></p>

            <a class="common-btn" href="<?php get_permalink($post->ID); ?>">Read full bio</a>
        </div>
    </div>
    <?php endforeach; ?>
    <?php
    wp_reset_postdata(); ?>
<?php endif; ?>
</div>