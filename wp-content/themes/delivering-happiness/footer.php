<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Delivering Happiness
 */
?>

	<footer class="site-footer">
		<div class="bar">
			<div class="wrapper">
				<img src="<?php bloginfo('template_url') ?>/assets/images/global/coupon.png" alt="" /><span>save 20% off our merchandise</span><a href="<?php echo home_url(); ?>/community/share-your-story" class="button transparent">share your story</a>
			</div>
		</div>
		<div class="all-links">
			<div class="wrapper">
				<div class="block company">
					<h4><a href="<?php echo home_url(); ?>/company">Company</a></h4>
					<ul>
						<li><a href="<?php echo home_url(); ?>/company">About DH</a></li>
						<li><a href="<?php echo home_url(); ?>/company/team-members">Team</a></li>
						<li><a href="<?php echo home_url(); ?>/company/partners">Partners</a></li>
						<li><a href="<?php echo home_url(); ?>/company/values">Values</a></li>
						<li><a href="<?php echo home_url(); ?>/company/press">Press</a></li>
					</ul>
				</div>
				<div class="block resources">
					<h4><a href="<?php echo home_url(); ?>/resources">Resources</a></h4>
					<ul>
						<li><a href="<?php echo home_url(); ?>/work/roi-calculator">ROI Calculator</a></li>
						<li><a href="https://dh.happinessatworksurvey.com/try" target="_blank">Happiness at Work Survey</a></li>
						<li><a href="<?php echo home_url(); ?>/work/request-presentation">Request Presentation</a></li>
						<li><a href="<?php echo home_url(); ?>/resources/books">Book Recommendations</a></li>
						<li><a href="<?php echo home_url(); ?>/work/culture-call">Free Consultation</a></li>
						<li><a href="<?php echo home_url(); ?>/resources/media-kit">Media Kit</a></li>
						<li><a href="<?php echo home_url(); ?>/resources/online-training">Online Training</a></li>
					</ul>
				</div>
				<div class="block the-book">
					<h4><a href="<?php echo home_url(); ?>/book">The book</a></h4>
					<ul>
						<li><a href="<?php echo home_url(); ?>/book">About the Book</a></li>
						<li><a href="<?php echo home_url(); ?>/book/about-the-author">About the Author</a></li>
						<li><a href="<?php echo home_url(); ?>/book/faqs/">FAQs</a></li>
						<li><a href="<?php echo home_url(); ?>/book/reviews">Reviews</a></li>
						<li><a href="<?php echo home_url(); ?>/book/digital-appendix">From the Book</a></li>
					</ul>
				</div>
				<div class="block keep-in-touch">
					<?php gravity_form(2, true, true, false, null, true); ?>
					<div class="social">
						<a href="https://www.facebook.com/deliveringhappiness" target="_blank" class="social-facebook">Facebook</a>
						<a href="https://twitter.com/dhmovement" target="_blank" class="social-twitter">Twitter</a>
						<a href="http://instagram.com/DHmovement" target="_blank" class="social-instagram">Instagram</a>
						<a href="https://www.youtube.com/user/DeliveringHappiness" target="_blank" class="social-youtube">YouTube</a>
					</div>
					<div class="gtranslate">
						<?php 
						if(function_exists('register_foo_widget')) {
							echo do_shortcode('[google-translator]'); //code for including google language translator
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="end-bar">
			<div class="wrapper">
				<p>&copy; 2014 Delivering Happiness&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo home_url(); ?>/privacy/">Privacy Policy</a>&nbsp;&nbsp;|&nbsp;<a href="<?php echo home_url(); ?>/terms/">Terms of Use</a></p>
				<img src="<?php bloginfo('template_url') ?>/assets/images/global/impress-logo.png" alt="impress" />
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>
<div class="faded"></div>
</body>
</html>