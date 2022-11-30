<?php

/**
 * CTa  Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */


?>
<section class="awards-affiliations">
    <div class="container">
        <h2><?php the_field('awards_title'); ?></h2>
        <div class="awards-wrap">
        <?php 
        if( have_rows('awards_block') ): 
            while (have_rows('awards_block') ): the_row();
        ?>
            <a href="#" class="wrap">
                <img src="<?php the_sub_field('image'); ?>" alt="">
            </a>
            <?php 
            endwhile;
        endif;
        ?>    
        </div>
    </div>
</section>