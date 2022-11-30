<?php
/**
 * Template name: Practice Areas
 */

get_header(); 
$banner = get_field('banner');
$about_section = get_field('about_section');
$practice_areas_section = get_field('practice_areas_section');
$free_consultation_section = get_field('free_consultation_section');
$rights_section = get_field('rights_section');
$verdicts_and_settlement_section = get_field('verdicts_and_settlements');
?>

<main id="primary" class="site-main">
    <?php include get_template_directory() . '/template-parts/blocks/hero.php'; ?>

    <?php require get_template_directory() . '/inc/breadcrumb.php'; ?>

    <section class="practice-areas-help">
        <div class="container">
            <div class="head">
                <h2><?php the_field('practice_title'); ?></h2>

                <?php the_field('practice_description'); ?>
            </div>
            
            <?php 
            $practice_area_args = array(
                'post_type'     => 'practice_areas',
                'posts_per_page' => -1,
                'order'         => 'ASC',
                'orderby'      =>  'title',
                'post-status'   =>  'publish'
            );

            $practice_areas = new WP_Query( $practice_area_args );

            if ( $practice_areas->have_posts() ) : ?>
            <div class="row">
                <?php while ( $practice_areas->have_posts() ) :    
                 $practice_areas->the_post(); ?>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <a href="<?php the_permalink(); ?>" class="injury-box">
                        <div class="img-wrap">
                            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                        </div>

                        <div class="content">
                            <div class="icon-wrap">
                                <img src="<?php the_field('image'); ?>" alt="">
                            </div>

                            <h3><?php the_title(); ?></h3>
                        </div>
                    </a>
                </div>
                <?php endwhile; ?>
            </div>
            <?php wp_reset_postdata(); endif; ?>
        </div>
    </section>
    
    <?php the_content(); ?>
    
<?php get_footer(); ?>