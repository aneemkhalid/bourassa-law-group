<?php

/**
 * About Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$about_block = get_field('about_block');
?>
<section class="about">
    <div class="container">
        <div class="img-wrap">
            <img src="<?php echo $about_block['image']; ?>" alt="">
            <?php if($about_block['caption']): ?>
                <div class="img-content">
                    <img src="<?php echo get_template_directory_uri() ?>/images/scale.png" alt="">
                    <p><?php echo $about_block['caption']; ?></p>
                </div>
            <?php endif; ?>
        </div>

        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="content">
                    <div class="info">
                        <span><?php echo $about_block['title']['title']; ?></span>
                        <h2><?php echo $about_block['title']['overline'];; ?></h2>
                        <p><?php echo $about_block['content']; ?></p>
                        <a class="common-btn" href="<?php echo $about_block['button']['url']; ?>"><?php echo $about_block['button']['title']; ?></a>
                    </div>
                        <div class="contact">
                            <img src="<?php echo get_template_directory_uri() ?>/images/phone-icon-blue.png" alt="">
                            <p>Call <a href="tel:<?php echo $about_block['phone']; ?>"> <?php echo $about_block['phone']; ?> </a> Today!</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>