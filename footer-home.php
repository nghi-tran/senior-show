<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SeniorShow
 */

?>

	<footer id="footer--home" class="site-footer">

		<div class="footer__menu">
			<p> Designed by GDSSA </p>
			<img src="<?php echo get_template_directory_uri(); ?>/img/footer__logo.svg" alt="footer logo" />
			<p> © VCD Senior Exhibition 2022 </p>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
