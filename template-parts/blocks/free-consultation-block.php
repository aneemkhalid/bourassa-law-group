<?php

/**
 * Free Consultation Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$free_consultation_block = get_field('free_consultation_block');
?>
<section class="consultation">
    <div class="container">
        <h2><?php echo $free_consultation_block['heading']; ?></h2>
        <div class="row">
            <div class="col-lg-5">
                <div class="content">
                    <div class="info">
                        <p><?php echo $free_consultation_block['content']; ?></p>
                        <a class="common-btn" href="<?php echo $free_consultation_block['button']['url']; ?>"><?php echo $free_consultation_block['button']['title']; ?></a>
                    </div>
                    <div class="note">
                        <span><?php echo $free_consultation_block['bottom_text']; ?></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="img-wrap">
                    <img src="<?php echo $free_consultation_block['image']; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>