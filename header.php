<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bourassa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
	<nav class="navbar navbar-expand-xl">
		<a class="navbar-brand" href="<?php echo home_url(); ?>">
			<img src="<?php echo get_field('logo', 'option'); ?>" alt="">
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			<span class="navbar-toggler-icon"></span>
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<div>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'container' => false
					)
				);
				?>
				<?php echo do_shortcode('[gtranslate]'); ?>
			<div class="get-consultation">
				<a href="#">
					<img src="<?php echo get_template_directory_uri() ?>/images/phone-icon.png" alt="">

					<span>
						get a free consultation
						<b><?php echo get_field('contact_no', 'option'); ?></b>
					</span>
				</a>
			</div>
			</div>
		</div>
	</nav>
</header>
	
