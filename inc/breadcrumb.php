<?php 
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}
?>
<section class="breadcrumb-wrapper">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/">Home</a></li>
				<?php if(is_singular('verdicts_settlements')) { ?>
				<li class="breadcrumb-item "><a href="/verdicts-settlements/">Verdicts & Settlements</a></li>

				<?php }elseif(is_singular('practice_areas')) { ?>
				<li class="breadcrumb-item"><a href="/practice-areas/">practice areas</a></li>
				
				<?php }elseif(is_singular('attorneys')) { ?>
				<li class="breadcrumb-item"><a href="/our-firm/">Our Firm</a></li>
				
				<?php }elseif(is_singular('video_faqs')) { ?>
				<li class="breadcrumb-item"><a href="/video-faqs/">video faqs</a></li>
				
				<?php }elseif(is_singular('post')) { ?>
				<li class="breadcrumb-item"><a href="/">Blog</a></li>

				<?php } ?>
				<?php 
				if (is_single()) {
					echo '<li class="breadcrumb-item active">'.get_the_title().'</li>';

				} elseif (is_page()) {
					echo '<li class="breadcrumb-item active">'.get_the_title().'</li>';

				} elseif (is_search()) {
					echo the_search_query();
					echo '</em>"';
				}
				?>
			</ol>
		</nav>
	</div>
</section>
  