<?php
/**
 * Template name: About
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
