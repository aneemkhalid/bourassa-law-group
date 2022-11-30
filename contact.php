<?php
/**
 * Template name: Contact
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
						<h2><?php the_field('contact_title'); ?></h2>
						<?php the_field('contact_content'); ?>
                            <div class="contact-form-evaluation get-in-touch">
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
										<div class="col-12 col-md-6">
											<input type="text" class="form-control" name="fname" placeholder="Name" required>
										</div>

										<div class="col-12 col-md-6">
											<input type="tel" class="form-control" name="phn" placeholder="Phone Number" required>
										</div>

										<div class="col-12">
											<input type="email" class="form-control" name="emailid" id="email" placeholder="Email Address" required>
										</div>

										<div class="col-12">
											<input type="text" class="form-control" name="address" placeholder="Street Address" required>
										</div>

										<div class="col-12 col-md-6">
											<input type="text" class="form-control" name="city" id="provide-city" placeholder="City" required>
										</div>

										<div class="col-12  col-md-6 select-wrap">
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
											<button type="submit" name="submit" class="common-btn">Send this message</button>
										</div>
									</div>
								</form>
							</div>
                            <div class="contact-info">
                                <h3>Contact Info</h3>

								<?php
								// Check rows existexists.
								if( have_rows('contact_info') ): ?>
                                <div class="inner row">
									<?php  while( have_rows('contact_info') ) : the_row(); ?>
                                    <div class="office-info col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <h4><?php the_sub_field('title'); ?></h4>

                                        <ul>
                                            <li>
                                                <img src="<?php echo get_template_directory_uri() ?>/images/location.png" alt="">
                                                
                                                <?php the_sub_field('content'); ?>
                                            </li>

                                            <li>
                                                <img src="<?php echo get_template_directory_uri() ?>/images/phone.png" alt="">
                                                
                                                <p><a href="tel:<?php the_sub_field('phone'); ?>"><?php the_sub_field('phone'); ?></a></p>
                                            </li>
                                        </ul>
                                    </div>
									<?php endwhile; ?>
                                </div>
								<?php endif; ?>
                            </div>
						</div>
					</div>

					<div class="col-lg-4">
						<aside>
						<div class="practice-areas-sidebar">
								<h2>Practice Areas</h2>

								<?php
								$practice_areas_args = array('post_type' => 'practice_areas');
								$practice_areas = new WP_Query($practice_areas_args); 
								if( $practice_areas ):       
								?>
								<?php while(  $practice_areas->have_posts() ): $practice_areas->the_post();
								  ?>
								
								<a href="<?php the_permalink(); ?>" class="injury-box">
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
						</aside>
					</div>
				</div>
			</div>
		</section>

        <?php the_content(); ?>
    

<?php get_footer(); ?>