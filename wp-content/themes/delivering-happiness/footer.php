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
				<img src="<?php bloginfo('template_url') ?>/assets/images/global/coupon.png" alt="" /><span>save 20% off our merchandise</span><a href="/community/share-your-story" class="button transparent">share your story</a>
			</div>
		</div>
		<div class="all-links">
			<div class="wrapper">
				<div class="block company">
					<h4><a href="/company">Company</a></h4>
					<ul>
						<li><a href="/company/team-members">Team</a></li>
						<li><a href="/company/advisors">Advisors</a></li>
						<li><a href="/company/partners">Partners</a></li>
						<li><a href="/company/values">Values</a></li>
						<li><a href="/company/press">Press</a></li>
					</ul>
				</div>
				<div class="block resources">
					<h4><a href="/resources">Resources</a></h4>
					<ul>
						<li><a href="/work/roi-calculator">ROI Calculator</a></li>
						<li><a href="https://app.happinessatworksurvey.com/?a=dh" target="_blank">Happiness at Work Survey</a></li>
						<li><a href="/work/request-presentation">Request Presentation</a></li>
						<li><a href="/resources/books">Book Recommendations</a></li>
						<li><a href="/work/culture-call">Free Consultation</a></li>
						<li><a href="/resources/media-kit">Media Kit</a></li>
						<li><a href="/resources/online-training">Online Training</a></li>
					</ul>
				</div>
				<div class="block the-book">
					<h4><a href="/book">The book</a></h4>
					<ul>
						<li><a href="/book/about-the-author">About the Author</a></li>
						<li><a href="/book/faqs/">FAQs</a></li>
						<li><a href="/book/reviews">Reviews</a></li>
						<li><a href="/book/digital-appendix">From the Book</a></li>
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
				</div>
			</div>
		</div>
		<div class="end-bar">
			<div class="wrapper">
				<p>&copy; 2014 Delivering Happiness&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/privacy/">Privacy Policy</a>&nbsp;&nbsp;|&nbsp;<a href="/terms/">Terms of Use</a></p>
				<img src="<?php bloginfo('template_url') ?>/assets/images/global/impress-logo.png" alt="impress" />
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>
<div class="faded"></div>
</body>
</html>