<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<!--<?php dynamic_sidebar( 'sidebar-1' ); ?>-->

	<aside class="sidebar-contact-info">
		<h2>Contact Info</h2>
		<div class="contact-info-text">
			<i class="fa fa-fw fa-phone" aria-hidden="true"></i>
			<p class="contact-info-paragraph">778-456-7891</p>
		</div>
		<div class="contact-info-text">
			<i class="fa fa-fw fa-envelope" aria-hidden="true"></i>
 			<p class="contact-info-paragraph"><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
		</div>
		<div class="contact-info-text">
			<i class="fa fa-fw fa-map-marker" aria-hidden="true"></i>
			<p class="contact-info-paragraph">1490 W Broadway<br>
			Vancouver, BC V6H 1H5</p>
		</div>
	</aside>
</div><!-- #secondary -->
