<?php
/**
 * The template for displaying the front page.
 */

get_header(); 
$banner = get_field('banner');
$about_section = get_field('about_section');
$practice_areas_section = get_field('practice_areas_section');
$free_consultation_section = get_field('free_consultation_section');
$rights_section = get_field('rights_section');
$verdicts_and_settlement_section = get_field('verdicts_and_settlements');
?>

<main id="primary" class="site-main">
    <section class="banner">
        <style>
            .banner:before{
                background-image:  url('<?php echo get_template_directory_uri() ?>/images/home-banner.jpg');
            }
        </style>

        <div class="container">
            <div class="banner-slider">
                <?php 
                $slides = $banner['slides']; 
                if( $slides ):
                    foreach($slides as $slide):
                ?>
                <div class="banner-content">
                    <span><?php echo $slide['overline']; ?></span>
                    <h1><?php echo $slide['home_banner_title']; ?></h1>
                    <p><?php echo $slide['home_banner_content']; ?> </p>
                </div>
                <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </section>
    
    <section class="evaluation-wrapper">
        <div class="container">
            <div class="inner">
                <div class="evaluation-form-wrapper">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="content">
                                <h3>Free Case Evaluation</h3>

                                <p>The evaluation is FREE! You do not have to pay anything to have an attorney evaluate your case.</p>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-7">
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
									
								  $url = 'https://api.lawmatics.com/v1/forms/2de29627-2996-467e-a125-58ecc477025f/submit';
								  $response = wp_remote_post( $url, array(
									'method'      => 'POST',
									'timeout'     => 45,
									'redirection' => 5,
									'httpversion' => '1.0',
									'blocking'    => true,
									'headers'     => array(),
									'body'        => array(
										'first_name' 		 => $name,
										'phone'				 => $phn,
										'email' 			 => $email,
										'street' 			 => $address,
										'city' 				 => $city,
										'state'				 => $state,
										'general_field_9f80' => $summary
									),
									'cookies'     => array()
									)
								);
								
								if ( is_wp_error( $response ) ) {
									$error_message = $response->get_error_message();
									echo "Something went wrong: $error_message";
								} else {
									echo 'Response:<pre>';
									print_r( $response );
									echo '</pre>';
								}

									//header('Location: https://blg.assetprotectiontrust.com/thank-you', true);
								}
							?>
								<form action="" method="POST" >
									<div class="form-row">
										<div class="col-12 col-lg-4 col-sm-6 ">
											<input type="text" id="fname" name="fname" class="form-control" placeholder="Name" required>
										</div>

										<div class="col-12 col-lg-4 col-sm-6">
											<input type="tel" name="phn" class="form-control" placeholder="Phone Number" required>
										</div>

										<div class="col-12 col-lg-4 col-sm-6">
											<input type="email" name="emailid" class="form-control" id="email" placeholder="Email Address" required>
										</div>

										<div class="col-12 col-lg-4 col-sm-6">
											<input type="text" name="address" class="form-control" placeholder="Street Address" required>
										</div>

										<div class="col-12 col-lg-4 col-sm-6">
											<input type="text" name="city" class="form-control" id="provide-city" placeholder="City" required>
										</div>

										<div class="col-12  col-lg-4 col-sm-6 select-wrap">
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

										<div class="col-12 col-lg-8 col-md-12">
											<textarea class="form-control" name="summary" id="Textarea" placeholder="Case Summary..."></textarea>
										</div>
										
										<div class="col-12 col-lg-4 col-md-12">
											<button id="contact-form" name="submit" type="submit" class="common-btn form-control">Submit your Case</button>
										</div>
									</div>
								</form>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php the_content(); ?>
    
<?php get_footer(); ?>