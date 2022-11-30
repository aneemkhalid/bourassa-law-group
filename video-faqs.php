<?php
/**
 * Template name: Video Faqs
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
							<div class="faqs">
								<?php 
								$video_faqs_args = array('post_type' => 'video_faqs');
								$video_faqs = new WP_Query($video_faqs_args); 
								if( $video_faqs ):
								$count = 0;
								?>
									<div id="accordion">
										<?php while(  $video_faqs->have_posts() ): $video_faqs->the_post(); ?>
										<div class="card">
											<div class="card-header" id="question-<?php echo $count; ?>">
												<h3>
													<button data-toggle="collapse" data-target="#collapse-<?php echo $count; ?>" aria-expanded="<?php 											if($count == 0): ?>true<?php endif; ?>" aria-controls="collapse-<?php echo $count; ?>">
													<?php the_title(); ?>
													</button>
												</h3>
											</div>
											
											<div id="collapse-<?php echo $count; ?>" class="collapse <?php if($count == 0): ?>show <?php endif; ?>" aria-										labelledby="question-<?php echo $count; ?>" data-parent="#accordion">
												<div class="card-body">
													<p><?php the_content(); ?></p>
												</div>
											</div>
										</div>
										<?php 
										$count ++;
										endwhile; ?>
									</div>
								<?php 
								endif; 
								wp_reset_postdata();
								?>
							</div>
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
