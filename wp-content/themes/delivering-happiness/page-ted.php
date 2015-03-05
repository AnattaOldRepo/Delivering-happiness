<?php
/*
Template Name: Ted
*/
get_header();
?>

<!-- /Blog section-->
<div class="ted-landing-page">
	<div class="wrapper">
		<section class="ted-hero-banner">
			<h6>"There is a difference between <span class="cl1">knowing</span> the path and <span class="cl">walking</span> the path."<br/> <smal><i>Morpheus</i>, The Matrix</smal></h6>
			<h1><img src="<?php bloginfo('template_url') ?>/assets/images/global/ted_logo.jpg"></h1>
			<h5><span class="tx">87%</span>&nbsp; of the world’s <span class="cl">to change the way we</span><br/>  workforce is unhappy <span class="cl">work.... with happiness</span></h5>
			<p>
				At Delivering Happiness we provide coaching and consulting services to help organizations <br/>
				achieve success by applying the frameworks of happiness to their internal culture. <br/>
				We're changing the world, by making happy work.
			</p>
			<article class="content">
				<?php gravity_form(2, true, true, false, null, true); ?>
			</article>
		</section>
	</div>	
	<!--section class="ted-three-colum">
		<div class="wrapper">
			<div class="ted-three-row">
				<a href="#" class="col1">
					<span>Download our <br/>Hello doc</span>
				</a>
				<a href="#" class="col2">
					<span>Calculate<br>your ROI<br/>in happiness</span>
				</a>
				<a href="#" class="col3">
					<span>Take the<br/> Happiness at Work<br/> Survey</span>
				</a>
			</div>	
		</div>
	</section-->
	<section class="three-column blue get-involved cross-fade">
		<div class="wrapper">
			<div class="col left-col">
				<div class="download-product">
					<div class="content">
						<div class="v-aling"><h3>Download our <br/>Hello doc</h3></div>
					</div>
				</div>
				<div class="hover-content">
					<div class="v-aling">
						<p></p>
						<a href="#" class="button blue">Download</a>
					</div>
				</div>
			</div>
			<div class="col middle-col">
				<div class="calculate">
					<div class="content">
						<div class="v-aling"><h3>Calculate<br/>your<br/>happiness</h3></div>
					</div>
				</div>
				<div class="hover-content">
					<div class="v-aling">
						<p>Unhappy employees cost the U.S. $550 billion a year (Gallup). How much could happiness save you?</p>
						<a href="<?php echo home_url(); ?>/services/roi-calculator/" class="button blue">LET’S CALCULATE!</a>
					</div>
				</div>
			</div>
			<div class="col right-col">
				<div class="work-survey">
					<div class="content">
						<div class="v-aling"><h3>Take the<br/>happiness at<br/>work survey</h3></div>
					</div>
				</div>
				<div class="hover-content">
					<div class="v-aling">
						<p>Are you happy at work? The results will show what you like and what needs to change.</p>
						<a href="<?php echo home_url(); ?>/services/the-happiness-at-work-survey/" class="button blue">LET’S GO!</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- /Get involved section-->
</div>

<?php get_footer(); ?>
