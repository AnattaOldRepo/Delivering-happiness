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
					<li><a href="#">Team</a></li>
					<li><a href="#">Advisors</a></li>
					<li><a href="#">Partners</a></li>
					<li><a href="#">Values</a></li>
					<li><a href="#">Press</a></li>
				</ul>
			</div>
			<div class="block resources">
				<h4>Resources</h4>
				<ul>
					<li><a href="#">ROI Calculator</a></li>
					<li><a href="#">Happiness at Work Survey</a></li>
					<li><a href="#">Request Presentation</a></li>
					<li><a href="#">Book Recommendations</a></li>
					<li><a href="#">Free Consultation</a></li>
					<li><a href="#">Online Training</a></li>
				</ul>
			</div>
			<div class="block the-book">
				<h4>The book</h4>
				<ul>
					<li><a href="#">About the Author</a></li>
					<li><a href="#">FAQs</a></li>
					<li><a href="#">Reviews</a></li>
					<li><a href="#">From the Book</a></li>
				</ul>
			</div>
			<div class="block keep-in-touch">
				<h4>Keep in touch</h4>
				<p>Get happiness delivered to your inbox</p>
				<div class="signup">
					<input type="text" placeholder="your email address" />
					<input type="button" value="signup" class="button blue" />
				</div>
				<div class="social">
					<a href="#" class="social-facebook">Facebook</a>
					<a href="#" class="social-twitter">Twitter</a>
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


<?php wp_footer(); ?>

</body>
</html>