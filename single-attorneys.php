<?php
/**
 * The template for displaying all single posts for PAs CPT
 */

get_header();
the_post();
?>

	<main id="primary" class="site-main">
		<section  id="single-practice-areas" class="inner-banner">
			<style>
				/* .inner-banner:before{
					background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');
				} */
			</style>

			<div class="container">
				<h1><?php the_title(); ?></h1>
			</div>
		</section>

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
