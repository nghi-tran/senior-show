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
							<img src="<?php echo get_template_directory_uri(); ?>/img/class-photo-1.png" alt="POV Horizontal Logo" />
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
									The senior class in the Visual Communication Design Program at Arizona State University is a resilient group of 44 passionate designers who have persevered through online learning and the pandemic, and are now taking our first steps out into the real world. This year commemorates the 30th Annual Senior Exhibition, the culmination of a year’s worth of research, thinking, and design around social issues we are invested in to raise awareness and spark conversations.
								</p>
							</div>

							<div class="show-about__class-photo">
									<img src="<?php echo get_template_directory_uri(); ?>/img/show-location.png" alt="Image of the Design School" />
							</div>
							<div class="show-about__class-photo--mobile">
									<img src="<?php echo get_template_directory_uri(); ?>/img/show-location.png" alt="Image of the Design School" />
							</div>

						</div>

					</div><!-- closes show-about -->

					<div class="show-location">
						<div class="show-location__description-wrapper">
							<div class="show-location__title"><h1>Location</h1></div>
							<div class="show-location__venue"><p>Park Central Mall</p></div>
							<div class="show-location__address">
								<p>
								    3121 N 3rd Ave <br>
								    Phoenix, AZ, 85013</a>
							</p>
							</div>
						</div>

						<div class="show-location__img-wrapper">
							<div class="show-location__img">
									<a href="https://goo.gl/maps/AejZS3fo2v9tswMp6" target="_blank"><img id="show-map" src="<?php echo get_template_directory_uri(); ?>/img/SeniorShow_ParkingMap.png" alt="POV Horizontal Logo" /></a>
							</div>

						</div>
					</div> <!-- closes show__location -->



					<div class="show-date">
						<div class="show-date__description-wrapper">
							
							<div class="show-date__title"><h1>Date</h1></div>
							
							<div class="show-date__duration">
							
								<p>Wednesday, May 4th</p> 
								<p>to Tuesday, May 10th</p>
								
							</div>
							
							<div class="show-date__time">
								<p>10:00AM &#8211; 4:00PM</p>
							</div>
							
						</div>

						<div class="show-date__content-wrapper">
							<div class="show-date__img-1">
									<p>
										Please join us on Friday May 6th from 6–9pm for a special POV Celebration. All the students will be present, so come check it out to learn more about each social issue. You can also attend during any of the times listed above.
									</p>
							</div>
						</div>
					</div> <!-- closes show__location -->





				</div><!-- closes about__container -->

	</main><!-- #main -->

<?php

get_footer();
?>
