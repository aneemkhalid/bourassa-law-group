<?php
/**
 * Template name: Verdicts and Settlements
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php include get_template_directory() . '/template-parts/blocks/hero.php'; ?>

		<?php require get_template_directory() . '/inc/breadcrumb.php'; ?>
		
		<section class="single-page-content-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="content">
							<div class="verdicts-settlements-results-wrap">
								<h2>Our Results</h2>

								<?php 
								$verdicts_settlements_args = array('post_type' => 'verdicts_settlements');
								$verdicts_settlements = new WP_Query($verdicts_settlements_args); 
								if( $verdicts_settlements ): 
								?>
								<div class="verdicts-settlements-results">
									<?php while(  $verdicts_settlements->have_posts() ): $verdicts_settlements->the_post(); ?>
									<div class="verdicts-settlements-content">
										<div class="head">
											<span><?php the_title(); ?></span>

											<h3><?php the_field('settlement_value'); ?></h3>
										</div>
										
										<?php the_content(); ?>
									</div>
									<?php endwhile; ?> 
								</div>
								<?php 
								endif; 
								wp_reset_postdata();
								?>
								<!-- <a class="common-btn" href="">next</a> -->
							</div>

							<?php the_content(); ?>
						</div>
					</div>

					<div class="col-lg-4">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</section>
	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
