<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bourassa
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
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main><!-- #main -->

<?php
get_footer();
