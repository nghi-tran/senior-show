<?php
    /*
     Template Name: About Page
    */
?>

<?php
get_header();
?>

	<main id="primary" class="about">
				<div class="about__container">

					<div class="about__class-photo">
							<img src="<?php echo get_template_directory_uri(); ?>/img/class-photo.png" alt="POV Horizontal Logo" />
					</div>
					<div class="about__class-photo--mobile">
							<img src="<?php echo get_template_directory_uri(); ?>/img/class-photo-mobile.png" alt="POV Horizontal Logo" />
					</div>

					<div class="show-about">
						<div class="show-about__title">
							<h1>
								Point of View
							</h1>
						</div>

						<div class="show-about__description">
							<div class="show-about__description-paragraph">
								<p>
									The Graphic Design Senior Student Association (GDSSA) is the senior
									class in the Visual Communication Design Program at Arizona State
									University. We are a resilient group of 44 passionate designers who
									have persevered through online learning and the pandemic, and are
									now taking our first steps out into the real world. This year commemorates
									the 30th Annual Senior Exhibition, the culmination of a year’s worth of
									research, thinking, and design around social issues we are passionate
									about to raise awareness and spark conversations.
								</p>
							</div>

							<div class="show-about__class-photo">
									<img src="<?php echo get_template_directory_uri(); ?>/img/show-about.jpg" alt="Image of the Design School" />
							</div>
							<div class="show-about__class-photo--mobile">
									<img src="<?php echo get_template_directory_uri(); ?>/img/show-about.jpg" alt="Image of the Design School" />
							</div>

						</div>

					</div><!-- closes show-about -->

					<div class="show-location">
						<div class="show-location__description-wrapper">
							<div class="show-location__title"><h1>Location</h1></div>
							<div class="show-location__venue"><h2>Park Central Mall</h2></div>
							<div class="show-location__address">
								<p>
								3121 N 3rd Ave <br>
								Phoenix, AZ, 85013
							</p>
							</div>
						</div>

						<div class="show-location__img-wrapper">
							<div class="show-location__img">
									<img src="<?php echo get_template_directory_uri(); ?>/img/show-location.png" alt="POV Horizontal Logo" />
							</div>

						</div>
					</div> <!-- closes show__location -->



					<div class="show-date">
						<div class="show-date__description-wrapper">
							<div class="show-date__title"><h1>Date</h1></div>
							<div class="show-date__duration">
								<h2>Wednesday, May 4th <br>
									to Sunday, May 10th
								</h2>
							</div>
							<div class="show-date__time">
								<p>
								10:00AM - 4:00PM
							</p>
							</div>
						</div>

						<div class="show-date__content-wrapper">
							<div class="show-date__img-1">
									<p>
										We are delighted to invite you to share this experience with us
										as we explore the intricacies of our society and celebrate the
										work of our graduating seniors.
									</p>
							</div>
						</div>
					</div> <!-- closes show__location -->





				</div><!-- closes about__container -->

	</main><!-- #main -->

<?php

get_footer();
?>
