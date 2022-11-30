<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bourassa
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }
?>

<aside>
	<div class="contact-form-evaluation">
		<span>Contact us</span>

		<h2>Free Case Evaluation</h2>
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
		<form action="" method="POST">
			<div class="form-row">
				<div class="col-12">
					<input type="text" class="form-control" name="fname" placeholder="Name" required>
				</div>

				<div class="col-12">
					<input type="tel" class="form-control" name="phn" placeholder="Phone Number" required>
				</div>

				<div class="col-12">
					<input type="email" class="form-control" name="emailid" id="email" placeholder="Email Address" required>
				</div>

				<div class="col-12">
					<input type="text" class="form-control" name="street" placeholder="Street Address" required>
				</div>

				<div class="col-12">
					<input type="text" class="form-control" name="city" id="provide-city" placeholder="City" required>
				</div>

				<div class="col-12 select-wrap">
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
				
				<div class="col-12">
					<button type="submit" name="submit" class="common-btn form-control">Submit your Case</button>
				</div>
			</div>
		</form>
	</div>

	<div class="practice-areas-sidebar">
		<h2>Practice Areas</h2>

		<?php
		$practice_areas_args = array('post_type' => 'practice_areas','posts_per_page'=>-1);
		$practice_areas = new WP_Query($practice_areas_args); 
		if( $practice_areas ):       
		?>
		<?php while(  $practice_areas->have_posts() ): $practice_areas->the_post();
			?>
		
		<a href="<?php the_permalink();?>" class="injury-box">
			<div class="icon-wrap">
				<img src="<?php echo the_field('image') ?>" alt="">
			</div>

			<h3><?php the_title();?></h3>
		</a>

	
		<?php 
		endwhile;
		endif; 
		wp_reset_postdata();
		?>
	</div>

	<?php
	$testimonials_args = array('post_type' => 'testimonials');
	$testimonials = new WP_Query($testimonials_args); 
	if( $testimonials ):       
	?>
	<div class="testimonials">
		<h2>Client testimonials</h2>
		
		<div class="testimonial-slider">
			<?php while(  $testimonials->have_posts() ): $testimonials->the_post(); ?>
			<div class="content">
				<div class="rating">
					<?php 
					$stars = get_field('rating_stars');     
					for( $i=1; $i<=$stars; $i++ ){ ?>
						<img src="<?php echo get_template_directory_uri() ?>/images/star.png" alt="">
					<?php } ?>
				</div>
				<p>“<?php echo get_the_content(); ?>”</p>
				<span><?php echo get_the_title(); ?></span>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
	<?php 
	endif; 
	wp_reset_postdata();
	?>
</aside>
