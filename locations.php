<?php
/**
 * Template name: Locations
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section  id="our-firm" class="inner-banner">
			<style>
				.inner-banner:before{
					background-image:url('<?php echo get_template_directory_uri() ?>/images/our-firm-banner-bg.jpg');
				}
			</style>

			<div class="container">
				<h1><?php the_title(); ?></h1>
			</div>
		</section>

		<?php require get_template_directory() . '/inc/breadcrumb.php'; ?>
		
		<section class="single-page-content-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="content">
							<div class="locations">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
