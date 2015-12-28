<?php
/*
Template Name: Post Event Landing Page
*/
get_header();

?>

<!-- Work page-->
<div class="service-request post-event">
    <section class="one-column hero">
		<div class="wrapper">
			<div class="copy">
				<h2>
					Thanks<br/>
					for attending!
				</h2>
			</div>
		</div>
	</section>
    <section class="two-column">
		<div class="wrapper">
			<div class="col left-col">
				<p>
					We are so happy you were able to experience our fearless leader, CEO/CHO Jenn Lim! 
				</p>
				<p>
					Our Core Value #5 is:
				</p>
				<p class="inspired-text">
					<img src="<?php bloginfo('template_url') ?>/assets/images/global/inspire-text.jpg" alt="5 Inspire and Be Inspired" />
				</p>
				<p>
					As we strive to live our values every day we want to make sure we share some extra resources to keep that inspiration flowing, and to thank you for constantly inspiring us.
				</p>
				<p>
					Grab a copy of <a href="#">Jenn's presentation</a> [via the form on this page], <a href="#">download the Zappos Culture Book</a>, and then check <a href="<?php echo home_url(); ?>">deliveringhappiness.com</a> for some great DH resources.
				</p>
				<p>
					We are here to help you continue the conversation around creating, growing, and sustaining culture and happiness in your workplace. 
				</p>
				<a href="#" class="button">GRAB YOUR CULTURE BOOK RIGHT HERE<i class="grab-btn-icon"></i></a>
			</div>
			<div class="col right-col">
				<div class="service-form">
					<h3>Get the Presentation!</h3>
					<iframe src="http://go.deliveringhappiness.com/l/66522/2015-02-08/2wbc" width="100%" height="320" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- /Work page-->
<?php get_footer(); ?>