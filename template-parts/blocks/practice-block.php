<?php
$practice_areas_block = get_field('practice_areas_block');
// print_r($practice_areas_block);
?>

<section class="practice-areas">
        <style>
            .practice-areas{
                background-image:  url('<?php echo get_template_directory_uri() ?>/images/practice-area-bg.png');
            }
        </style>
        <div class="container">
            <div class="head">
                <span><?php echo $practice_areas_block['overline']; ?></span>
                <h2><?php echo $practice_areas_block['title']; ?></h2>
            </div>
            <div class="row">
                <?php
                $PAs = get_field('select_practice_areas');
                if( $PAs ):
                 foreach( $PAs as $post ):
                    setup_postdata($post); ?>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <a href="<?php the_permalink($post->ID); ?>" class="injury-box">
                            <div class="img-wrap">
                                <img src="<?php echo get_field('image', $post->ID); ?>" alt="<?php echo $post->post_title; ?>">
                                <img class="hover-img" src="<?php echo get_field('hover_image', $post->ID); ?>" alt="<?php echo $post->post_title; ?>">
                            </div>
                            <h3><?php echo $post->post_title; ?></h3>
                        </a>
                    </div>
                    <?php 
                    endforeach;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            <div class="btn-wrap">
              <a class="common-btn" href="<?php echo $practice_areas_block['button']['url']; ?>"><?php echo $practice_areas_block['button']['title']; ?></a>
            </div>
        </div>
    </section>