<?php

/**
 * CTa  Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$cta_block = get_field('cta_block');
?>
<section class="your-rights">
    <style>
        .your-rights:before{
            background-image: url('<?php echo get_template_directory_uri() ?>/images/rights-bg.jpg');
        }
    </style>
    <div class="container">
        <div class="inner">
            <div class="img-wrap">
                <img src="<?php echo $cta_block['icon']; ?>" alt="">
            </div>

            <span><?php echo $cta_block['overline']; ?></span>

            <h2><?php echo $cta_block['title']; ?></h2>

            <?php echo $cta_block['content']; ?>
        </div>
    </div>
</section>