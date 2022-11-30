<?php

/**
 * Verdicts & Settelments Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$verdicts_and_settlements = get_field('verdicts_and_settlements');
?>
<section class="verdicts">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="content">
                    <h2><?php echo $verdicts_and_settlements['heading']; ?></h2>
                    <p><?php echo $verdicts_and_settlements['sub_heading']; ?></p>
                    <a class="common-btn" href="<?php echo $verdicts_and_settlements['button']['url']; ?>"><?php echo $verdicts_and_settlements['button']['title']; ?></a>
                </div>
            </div>

            <div class="col-lg-8 col-md-7">
                <?php 
                $VSs = get_field('verdicts_&_settelments');
                if( $VSs ):
                ?>
                <div class="settlements-slider">
                    <?php foreach( $VSs as $VS ): ?>    
                        <div class="settlements">
                            <div class="head">
                                <span><?php echo $VS->post_title; ?></span>
                                <h3><?php echo get_field('settlement_value', $VS->ID); ?></h3>
                            </div>
                            <p><?php echo get_the_excerpt($VS->ID);?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>    
            </div>
        </div>
    </div>
</section>