<?php

/**
 * Why Coose Us  Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$why_choose_us_block = get_field('why_choose_us_block');
?>
<section class="why-choose-us">
    <div class="container">
        <h2><?php echo $why_choose_us_block['title']; ?></h2>

        <div class="inner">
            <img src="<?php echo get_template_directory_uri() ?>/images/why-choose-us-img.png" alt="">

            <ul>
            <?php 
        if( have_rows('choose_us_section') ): 
            while (have_rows('choose_us_section') ): the_row();
        ?>
                <li>
                    <div class="icon">
                        <img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('heading'); ?>">
                    </div>

                    <p><?php the_sub_field('heading'); ?></p> 
                </li>
                <?php 
            endwhile;
        endif;
        ?>    

                
            </ul>
        </div>
    </div>
</section>