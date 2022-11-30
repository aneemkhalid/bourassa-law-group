<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bourassa
 */

?>
	<?php if(!is_page('contact')): ?>
	<section class="free-case-evaluation <?php if(is_page('practice-areas')): ?>footer-form<?php endif; ?>">

        <style>
            .free-case-evaluation:before{
                background-image: url('<?php echo get_template_directory_uri() ?>/images/free-case-evaluation.jpg');
            }
        </style>
        
        <div class="container">
            <div class="inner">
			<?php 
			$evaluation_block = get_field('evaluation_block', 'options'); 
			?>

				<div class="content">
					<h2><?php echo $evaluation_block['title']; ?></h2>
					<p><?php echo $evaluation_block['content']; ?></p>
				</div>
				<?php if(is_page('practice-areas')): ?>
				<div class="contact-form-evaluation">				
						<?php
								$name = $phn = $email = $address = $city = $state = $summary = '';
								if (isset($_POST['submit'])){
								  $name = $_POST["fname"];
								  $phn = $_POST["phn"];
								  $email = $_POST["emailid"];
								  $address = $_POST["address"];
								  $city = $_POST["city"];
								  $state = $_POST["state"];
								  $summary = $_POST["summary"];


									$curl = curl_init();

									curl_setopt_array($curl, array(
									  CURLOPT_URL => 'https://api.lawmatics.com/v1/forms/2de29627-2996-467e-a125-58ecc477025f/submit?first_name='.$name.'&phone='.$phn.'&email='.$email.'&street='.$address.'&city='.$city.'&state='.$state.'&general_field_9f80='.$summary,
									  CURLOPT_RETURNTRANSFER => true,
									  CURLOPT_ENCODING => '',
									  CURLOPT_MAXREDIRS => 10,
									  CURLOPT_TIMEOUT => 0,
									  CURLOPT_FOLLOWLOCATION => true,
									  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
									  CURLOPT_CUSTOMREQUEST => 'POST',
									  CURLOPT_HTTPHEADER => array(
										'Cookie: AWSALB=BBE1TxiJ2PHGBAtpn0PNIf2yswv3QKkcYQs10bKpuZLJiJz4pWoKpq31cP4cZfNoKoyDJXoenmIcy/Kpconh+UyGAGlmGk2VGmAQvOlhAsAyF+ALsM4rcZr1zYQM; AWSALBCORS=BBE1TxiJ2PHGBAtpn0PNIf2yswv3QKkcYQs10bKpuZLJiJz4pWoKpq31cP4cZfNoKoyDJXoenmIcy/Kpconh+UyGAGlmGk2VGmAQvOlhAsAyF+ALsM4rcZr1zYQM'
									  ),
									));

									$response = curl_exec($curl);

									curl_close($curl);

									header('Location: https://blg.assetprotectiontrust.com/thank-you', true);
								}
							?>
					<form action="" method="POST" id="ajax-contact-form">
						<div class="form-row">
							<div class="col-12 col-md-4">
								<input type="text" class="form-control" name="fname" placeholder="Name" required>
							</div>

							<div class="col-12 col-md-4">
								<input type="tel" name="phn"class="form-control" placeholder="Phone Number" required>
							</div>

							<div class="col-12 col-md-4">
								<input type="email" class="form-control" name="emailid" id="email" placeholder="Email Address" required>
							</div>

							<div class="col-12 col-md-4">
								<input type="text" class="form-control" name="address" placeholder="Street Address" required>
							</div>

							<div class="col-12 col-md-4">
								<input type="text" class="form-control" name="city" id="provide-city" placeholder="City" required>
							</div>

							<div class="col-12  col-md-4 select-wrap">
								<select class="custom-select" name="state" id="select-state" required>
									<option selected disabled value="">State</option>
									<option>AL</option>
									<option>AK</option>
									<option>AZ</option>
									<option>AR</option>
									<option>CA</option>
									<option>CO</option>
									<option>CT</option>
									<option>DE</option>
									<option>DC</option>
									<option>FL</option>
									<option>GA</option>
									<option>HI</option>
									<option>ID</option>
									<option>IL</option>
									<option>IN</option>
									<option>IA</option>
									<option>KS</option>
									<option>KY</option>
									<option>LA</option>
									<option>ME</option>
									<option>MD</option>
									<option>MA</option>
									<option>MI</option>
									<option>MN</option>
									<option>MS</option>
									<option>MO</option>
									<option>MT</option>
									<option>NE</option>
									<option>NV</option>
									<option>NH</option>
									<option>NJ</option>
									<option>NM</option>
									<option>NY</option>
									<option>NC</option>
									<option>ND</option>
									<option>OH</option>
									<option>OK</option>
									<option>OR</option>
									<option>PA</option>
									<option>RI</option>
									<option>SC</option>
									<option>SD</option>
									<option>TN</option>
									<option>TX</option>
									<option>UT</option>
									<option>VT</option>
									<option>VA</option>
									<option>WA</option>
									<option>WV</option>
									<option>WI</option>
									<option>WY</option>
								</select>
							</div>

							<div class="col-12">
								<textarea class="form-control" name="summary" id="Textarea" placeholder="Case Summary..."></textarea>
							</div>
							
							<div class="col-12 text-center">
								<button type="submit" name="submit" class="common-btn">Submit your Case</button>
							</div>
						</div>
					</form>
				</div>
				<?php endif; ?>
				<div class="btn-wrap">
					<a href="<?php echo $evaluation_block['button_link']; ?>"><?php echo $evaluation_block['button_text']; ?></a>
					<a href="tel:<?php echo $evaluation_block['phone']; ?>"><img src="<?php echo get_template_directory_uri() ?>/images/phone-icon.png" alt=""><?php echo $evaluation_block['phone']; ?></a>
				</div>
            </div>
            <h2></h2>
        </div>
    </section>
	<?php endif; ?>

</main>

<footer>
	<div class="container">
		<div class="inner">
			<div class="menu">
				<h6>Main Links</h6>
			
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'container' => false,
						'menu_class' => ''
					)
				);
				?>
			</div>
			
			<div class="menu">
				<h6>Practice Areas</h6>

				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'secondary',
						'menu_id'        => 'secondary-menu',
						'container' => false,
						'menu_class' => ''
					)
				);
				?>
			</div>

			<div class="info">
				<h6><a href="/locations/">Denver Office</a></h6>

				<?php echo get_field('denver_office', 'option'); ?>
			</div>

			<div class="info">
				<h6><a href="/locations/">Scottsdale Office</a></h6>

				<?php echo get_field('scottsdale_office', 'option'); ?>
			</div>

			<div class="info">
				<h6><a href="/locations/">Las Vegas Office</a></h6>

				<?php echo get_field('las_vegas_office', 'option'); ?>
			</div>
		</div>
	</div>

	<div class="footer-bottom">
		<div class="container">
			<div class="inner">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_field('footer_logo', 'option'); ?>" alt="">
				</a>

				<ul class="social-icons">
					<?php if(get_field('facebook_link', 'option')): ?>
						<li><a href="<?php echo get_field('facebook_link', 'option'); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/facebook.png" alt=""></a></li>
					<?php endif; ?>

					<?php if(get_field('twitter_link', 'option')): ?>
						<li><a href="<?php echo get_field('twitter_link', 'option'); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/twitter.png" alt=""></a></li>
					<?php endif; ?>
					
					<?php if(get_field('linkedin_link', 'option')): ?>
						<li><a href="<?php echo get_field('linkedin_link', 'option'); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/free-linkedin-icon-130-thumb.png" alt=""></a></li>
					<?php endif; ?>
					
					<?php if(get_field('youtube_link', 'option')): ?>
						<li><a href="<?php echo get_field('youtube_link', 'option'); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/youtube.png" alt=""></a></li>
					<?php endif; ?>

				</ul>

				<div class="copy-right">
					<p>©2022 <?php echo get_field('copyright', 'option'); ?></p>

					<ul>
						<li><a href="/sitemap_index.xml">Sitemap</a></li>

						<li><a href="/accessibility-privacy-policy/">Privacy Policy</a></li>

						<li><span id="siteseal"><script async type="text/javascript" src=https://seal.godaddy.com/getSeal?sealID=LAyPnd3AhOrYhVYLODOhtm9sMqrktAk84f5vYnUrHLvacQMCcQXEMfO27giT></script></span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
<script src="//www.apex.live/scripts/invitation.ashx?company=blgwins" async></script>
</body>
</html>
