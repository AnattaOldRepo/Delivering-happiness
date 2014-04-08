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
				<img src="<?php bloginfo('template_url') ?>/assets/images/global/coupon.png" alt="" /><span>save 20% off our merchandise</span><a href="#" class="button transparent">share your story</a>
			</div>
		</div>
		<div class="all-links">
			<div class="wrapper">
				<div class="block company">
					<h4>Company</h4>
					<ul>
						<li><a href="/team">Team</a></li>
						<li><a href="#">Advisors</a></li>
						<li><a href="#">Partners</a></li>
						<li><a href="core-values-2/">Values</a></li>
						<li><a href="about-us/press/">Press</a></li>
					</ul>
				</div>
				<div class="block resources">
					<h4>Resources</h4>
					<ul>
						<li><a href="/roi-calculator">ROI Calculator</a></li>
						<li><a href="https://app.happinessatworksurvey.com/?a=dh" target="_blank">Happiness at Work Survey</a></li>
						<li><a href="/powerpoint">Request Presentation</a></li>
						<li><a href="/books">Book Recommendations</a></li>
						<li><a href="#">Free Consultation</a></li>
						<li><a href="#">Online Training</a></li>
					</ul>
				</div>
				<div class="block the-book">
					<h4>The book</h4>
					<ul>
						<li><a href="/about-us/about-the-author/">About the Author</a></li>
						<li><a href="/about-us/frequently-asked-questions-answered-by-tony/">FAQs</a></li>
						<li><a href="/about-2/reviews/">Reviews</a></li>
						<li><a href="/about-us/about-2/from-the-book/">From the Book</a></li>
					</ul>
				</div>
				<div class="block keep-in-touch">
					<?php gravity_form(2, true, true, false, null, true); ?>
					<div class="social">
						<a href="https://www.facebook.com/deliveringhappiness" target="_blank" class="social-facebook">Facebook</a>
						<a href="https://twitter.com/dhmovement" target="_blank" class="social-twitter">Twitter</a>
						<a href="#" class="social-instagram">Instagram</a>
						<a href="#" class="social-youtube">YouTube</a>
					</div>
				</div>
			</div>
		</div>
		<div class="end-bar">
			<div class="wrapper">
				<p>&copy; 2014 Delivering Happiness&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">Privacy Policy</a>&nbsp;&nbsp;|&nbsp;<a href="#">Terms of Use</a></p>
				<img src="<?php bloginfo('template_url') ?>/assets/images/global/impress-logo.png" alt="impress" />
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>