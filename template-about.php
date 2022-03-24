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

					<div class="show-about">
						<div class="show-about__title">
							<h1>
								Point of View
							</h1>
						</div>

						<div class="show-about__description">
							<div class="show-about__description-paragraph">
								<h2>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
									non proident, sunt in culpa qui officia deserunt.
								</h2>
							</div>

							<div class="about__class-photo">
									<img src="<?php echo get_template_directory_uri(); ?>/img/show-about-1.png" alt="POV Horizontal Logo" />
							</div>
						</div>

					</div><!-- closes show-about -->

					<div class="show-location">
						<div class="show-location__description-wrapper">
							<div class="show-location__title"><h1>Location</h1></div>
							<div class="show-location__venue"><h2>Venue Name</h2></div>
							<div class="show-location__address">
								<h2>
								1234 S Main Street <br>
								Phoenix, AZ, 85281
								</h2>
							</div>
						</div>

						<div class="show-location__img-wrapper">
							<div class="show-location__img-1">
									<img src="<?php echo get_template_directory_uri(); ?>/img/show-location-2.png" alt="POV Horizontal Logo" />
							</div>
							<div class="show-location__img-2">
									<img src="<?php echo get_template_directory_uri(); ?>/img/show-location-3.png" alt="POV Horizontal Logo" />
							</div>
						</div>
					</div> <!-- closes show__location -->



					<div class="show-date">
						<div class="show-date__description-wrapper">
							<div class="show-date__title"><h1>Date</h1></div>
							<div class="show-date__duration">
								<h2>Wednesday, May 4th <br>
									to Sunday, May 8th
								</h2>
							</div>
							<div class="show-date__time">
								<h2>
								10:00AM - 5:00PM
								</h2>
							</div>
						</div>

						<div class="show-date__content-wrapper">
							<div class="show-date__img-1">
									<h2>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Fermentum dui faucibus in ornare. Rhoncus dolor purus non enim
										praesent elementum facilisis.
									</h2>
							</div>
						</div>
					</div> <!-- closes show__location -->





				</div><!-- closes about__container -->

	</main><!-- #main -->

<?php

get_footer();
?>
