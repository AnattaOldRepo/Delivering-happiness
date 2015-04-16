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
			<div class="wrapper" align="center">
				<?php if(is_page('services')): 
					$url = home_url().'/services/culture-call/';
				else:
					$url = home_url().'/services/';
				endif; ?>
				<img src="<?php bloginfo('template_url') ?>/assets/images/global/coupon.png" alt="" /><span><a href="<?php echo $url; ?>">Learn how to Make Happy Work!</a></span>
			</div>
		</div>
		<div class="all-links">
			<div class="wrapper">
				<div class="block company">
					<h4><a href="<?php echo home_url(); ?>/company">Company</a></h4>
					<ul>
						<li><a href="<?php echo home_url(); ?>/company">About DH</a></li>
						<li><a href="<?php echo home_url(); ?>/company/team-members">Team</a></li>
						<li><a href="<?php echo home_url(); ?>/company/values">Values</a></li>
						<li><a href="<?php echo home_url(); ?>/company/press">Press</a></li>
					</ul>
				</div>
				<div class="block resources">
					<h4><a href="<?php echo home_url(); ?>/resources">Resources</a></h4>
					<ul>
						<li><a href="<?php echo home_url(); ?>/services/calculate-your-roi/">ROI Calculator</a></li>
						<li><a href="<?php echo home_url(); ?>/services/the-happiness-at-work-survey/">Happiness at Work Survey</a></li>
						<li><a href="<?php echo home_url(); ?>/services/request-presentation">Request Presentation</a></li>
						<li><a href="<?php echo home_url(); ?>/resources/books">Book Recommendations</a></li>
						<li><a href="<?php echo home_url(); ?>/services/culture-call">Free Consultation</a></li>
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
					<article class="content">
						<?php gravity_form(2, true, true, false, null, true); ?>
					</article>
					<br/>
					<div class="social">
						<a href="https://www.facebook.com/deliveringhappiness" target="_blank" class="social-facebook">Facebook</a>
						<a href="https://twitter.com/dhmovement" target="_blank" class="social-twitter">Twitter</a>
						<a href="http://instagram.com/DHmovement" target="_blank" class="social-instagram">Instagram</a>
						<a href="https://www.youtube.com/user/DeliveringHappiness" target="_blank" class="social-youtube">YouTube</a>
					</div>
					<div class="gtranslate">
						<?php 
						if(function_exists('register_glt_widget')) {
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
				<a href="http://doyouimpress.com/" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/global/impress-logo.png" alt="impress" /></a>
			</div>
		</div>
	</footer>
</div>
<section class="rounded-block happy-work">
	<div class="">
		<div class="modal-box" id="signup_form" style="display:none;">
			<p>Great! Your inbox is about to get a whole lot happier. Please enter your details, and find out how Delivering Happiness helps organizations create their own unique and sustainable work cultures to unleash happiness, human potential and business success. </p>

			<p>We value your privacy. Read our <a href="/privacy/">Privacy Policy</a>.</p>
			<span class="close">close</span>
		</div>
		<div class="modal-box" id="vhp_form" style="display:none;">
			<p>Great! Your inbox is about to get a whole lot happier. Please enter your details, and find out how Delivering Happiness helps organizations create their own unique and sustainable work cultures to unleash happiness, human potential and business success. </p>
			<iframe src="http://go.deliveringhappiness.com/l/66522/2015-03-25/blwc" width="100%" height="500" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
			<p>We value your privacy. Read our <a href="/privacy/">Privacy Policy</a>.</p>
			<span class="close">close</span>
		</div>

		<div class="modal-box" id="calculate_roi_form" style="display:none;">
			<p>Please enter your information below to find out how much happiness could save you!</p>
			<iframe src="http://go.deliveringhappiness.com/l/66522/2015-03-31/cgg1" width="100%" height="500" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
			<p>We value your privacy. Read our <a href="/privacy/">Privacy Policy</a>.</p>
			<span class="close" id="close1">close</span>
		</div>
	</div>
</section>
<?php wp_footer(); ?>
<div class="faded"></div>
<script type="text/javascript">
piAId = '67522';
piCId = '1390';

(function() {
	function async_load(){
		var s = document.createElement('script'); s.type = 'text/javascript';
		s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';
		var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);
	}
	if(window.attachEvent) { window.attachEvent('onload', async_load); }
	else { window.addEventListener('load', async_load, false); }
})();
</script>
</body>
</html>
