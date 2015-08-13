<?php
/*
Template Name: Speaking Page
*/
get_header();

?>

<div class="speaking-page">
	<div class="wrapper">
		<section class="hero-banner">
			<img src="<?php bloginfo('template_url') ?>/assets/images/speaking/speaking-hero.jpg" alt="" />
		</section>
		
		<section class="row two-col-layout">
			<aside class="nav-left-sidebar">
				<h5>What we do</h5>
				<ul>
					<li><a class="active" href="#">Speaking</a></li>
					<li><a href="#">Culture Assessment</a></li>
					<li><a href="#">Workshops</a></li>
					<li><a href="#">Consulting</a></li>
					<li><a href="#">Creative Services</a></li>
				</ul>
				<a href="#" class="btn primary purple">Click Me</a>
			</aside>
			<div class="col-right has-left-sticky">
				<h1>Inspire Culture Change - 40px</h1>
				<article class="modules">
					<h2>Euclid paroxysm of global death - 28px</h2>
					<div class="article-banner has-quick-links">
						<div class="banner">
							<img src="<?php bloginfo('template_url') ?>/assets/images/speaking/speaking-article-banner" alt="" />
						</div>
						<aside class="nav-right-sidebar">
							<h5>QUICK LINKS</h5>
							<ul>
								<li><a href="#">Speakers</a></li>
								<li><a href="">Topics</a></li>
								<li><a href="">Past Engagements</a></li>
								<li><a href="">Download Our Hello</a></li>
								<li><a href="">Lorem Ipsum</a></li>
							</ul>
						</aside>
					</div>
					<p>
						Helvetica Light - 18px.<br/>
						Our experienced keynote speakers and breakout facilitators have inspired companies across size and industry, and around the world. We ignite the energy and excitement that are nascent in your organization by instilling a deep understanding of the importance of creating a sustainable culture using happiness as a business model.
					</p>
					<p>
						Along the way, we’ll equip your audience with the data-driven, science-backed information necessary to make a compelling case to reexamine your organization’s culture. 
					</p>
				</article>
				<article class="modules">
					<blockquote>
						<p>
							This is a blockquote for testimonials. It should only ever be used for quotes, and emphasis should be in non-italic. This is Museo Slab 500 Italic in 28px.
						</p>
						<cite>– Quote Owner’s name in 20px Museo Slab 500</cite>
					</blockquote>
				</article>
				<article class="modules">
					<h2>Outcomes - 28px</h2>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					<ul class="ul-default">
						<li>A solid understanding and foundation around culture, happiness and the spark necessary to invigorate your organization</li>
						<li>Practical examples of how happiness can be applied to the workplace to increase retention, productivity and engagement</li>
						<li>Data and case studies to bring back to your organization as to why it makes sense to commit to culture as a competitive advantage</li>
					</ul>
				</article>
			</div>
		</section>

		<div class="sign-up-ribbon">
			<form>
				<label for="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
				<input type="email" placeholder="your email address" />
				<input type="submit" value="Submit" />
			</form>
		</div>

	</div>
</div>

<?php get_footer(); ?>