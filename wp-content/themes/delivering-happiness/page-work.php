<?php
/*
Template Name: work
*/
get_header();

?>

<!-- Work page-->
<div class="work">
	<section class="two-column hero">
		<div class="wrapper">
			<div class="left-col oderate-violet-area">
				<article class="content">
					<blockquote>“Get the culture right,<br/>&nbsp;and everything<br/>&nbsp;else just falls into place.” </blockquote>
					<span>~ Tony Hsieh</span>
					<a href="#" class="button">SCHEDULE A Free Culture Call</a>
				</article>
			</div>
			<div class="right-col">
				<div class="media">
					<img src="<?php bloginfo('template_url')?>/assets/images/global/work_hero.jpg" alt="" />
				</div>
			</div>
		</div>
	</section>

	<section class="rounded-block happy-work">
		<div class="wrapper">
			<div class="container">
				<article class="content">
					<h2>Let’s make Happy Work™. <span>Ready to plan your journey?</span></h2>
					<p>We believe happiness at work is a journey. Here is your roadmap. These simple<br/>five steps combine the science of happiness and the experience of Zappos and<br/>other leading companies to help your organization create its own unique work<br/>culture,  increase happiness and build success. </p>
					<a href="#" class="button moderateviolet">DOWNLOAD ROADMAP</a>
					<img src="<?php bloginfo('template_url') ?>/assets/images/global/work-animation-demo.png" alt="" />
				</article>
			</div>
		</div>
	</section>

	<section class="three-column oderate-violet get-involved cross-fade">
		<div class="wrapper">
			<h2>Get involved:</h2>
			<div class="col left-col">
				<div class="work-survey">
					<div class="content">
						<div class="v-aling"><h3>Take the<br/>happiness at<br/>work survey</h3></div>
					</div>
				</div>
				<div class="hover-content">
					<div class="v-aling">
						<a href="#" class="button moderateviolet">LET’S GO!</a>
					</div>
				</div>
			</div>
			<div class="col middle-col">
				<div class="schedule-call">
					<div class="content">
						<div class="v-aling"><h3>Schedule<br/>a free<br/>culture call</h3></div>
					</div>
				</div>
				<div class="hover-content">
					<div class="v-aling">
						<a href="#" class="button moderateviolet">LET’S TALK!</a>
					</div>
				</div>
			</div>
			<div class="col right-col">
				<div class="calculate">
					<div class="content">
						<div class="v-aling"><h3>Calculate<br/>your<br/>happiness</h3></div>
					</div>
				</div>
				<div class="hover-content">
					<div class="v-aling">
						<p>Unhappy employees cost the U.S. $350 billion a year (Gallup). How much could happiness save you?</p>
						<a href="#" class="button moderateviolet">LET’S CALCULATE!</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="four-column cross-fade">
		<div class="wrapper">
			<h2>Coaches and speakers:</h2>
			<?php
			$team_members = get_posts(
				array(
					'post_type' => 'team_member',
					'posts_per_page' => 7
				)
			);
			?>

			<?php foreach ( $team_members as $key => $team_member ) { ?>
				<div class="col left-col <?php if ( ($key + 1) % 4 == 0 ) echo 'last'; ?>">
					<div class="team-member">
						<div class="media">
							<img src="<?php $user_image = get_field( 'image', $team_member->ID ); echo $user_image['url']; ?>" alt="<?php echo get_the_title( $team_member->ID ); ?>" />
						</div>
						<div class="content small">
							<div class="v-aling">
								<h3><?php echo get_the_title( $team_member->ID ); ?></h3>
								<span class="job-title"><?php echo get_field( 'designation', $team_member->ID ); ?></span>
							</div>
						</div>
					</div>
					<div class="hover-content">
						<div class="v-aling">
							<a href="<?php echo get_permalink( $team_member->ID ); ?>" class="button">Read Bio</a>
						</div>
					</div>
				</div>
			<?php } ?>

			<div class="col left-col last">
				<div class="more-team">
					<div class="content moderateViolet">
						<div class="v-aling">
							<h3>Meet the<br/>rest of<br/>our team</h3>
						</div>
					</div>
				</div>
				<div class="hover-content">
					<div class="v-aling">
						<a href="/team" class="button">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="two-column coin-animation clients flip">
		<div class="wrapper">
			<div class="left-col">
				<div class="media">
					<h2>Kudos from our clients:</h2>
					<div class="all-coins">
						<div class="coin active">
							<div class="coin-side front clients-hp"></div>
							<div class="coin-side back clients-hp-selected"></div>
						</div>
						<div class="coin">
							<div class="coin-side front clients-aetna"></div>
							<div class="coin-side back clients-aetna-selected"></div>
						</div>
						<div class="coin">
							<div class="coin-side front clients-r"></div>
							<div class="coin-side back clients-r-selected"></div>
						</div>
						<div class="coin left-pull">
							<div class="coin-side front clients-lost"></div>
							<div class="coin-side back clients-lost-selected"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="right-col blue-area">
				<article class="content active">
					<div class="v-aling">
						<blockquote>This was insightful, inspiring, and applicable in real ways.  Sharing ideas and practices with other organizations was invaluable.  They understand how to use happiness to improve culture and productivity.</blockquote>
						<span>~ Martin Tracey, VP of HR</span>
					</div>
				</article>
				<article class="content">
					<div class="v-aling">
						<blockquote>This was an awesome experience! The best part for me was seeing the correlation between happiness at work and increased production/profit. I think it drove home how important happiness is and how easily happiness can be accomplished.</blockquote>
						<span>~ Aetna, June 2013 </span>
					</div>
				</article>
				<article class="content">
					<div class="v-aling">
						<blockquote>Delivering Happiness has had a great impact directly and indirectly on virtually all aspects of our business from how to interact with customers, our partners and each other.  Focusing on our culture has increased sales, increased the bottom line and most importantly allowed us to better serve our mission</blockquote>
						<span>~ Scotty Bintz, CEO, RealTruck</span>
					</div>
				</article>
				<article class="content">
					<div class="v-aling">
						<blockquote>DH changed the way I think about successfully managing a business. It helped catapult me out of an old fashion top down style, to an inclusive, engaged process that is ultimately more rewarding to everyone at our company. If you are interested in the same old, same old, DON'T go to DH. You won't be able to leave unchanged. </blockquote>
						<span>~ Ra'uf Glasgow, Producer, West Wind Media, former producer of LOST (TV Show)</span>
					</div>
				</article>
			</div>
		</div>
	</section>

	<section class="rounded-block call-dh">
		<div class="wrapper">
			<div class="container">
				<div class="clear">
					<article class="content">
						<h2>Talk to us. It’s free.<span>What’s the state of your culture?</span></h2>
						<p>Whether it’s a phone call, email or hi-five, we’re here to help. A free 30-minute discovery call to look at the challenges and opportunities of your culture in light of your goals, identify what’s next for your journey, and consider how happiness and the DH model can help bring your dream culture to life. </p>
						
					</article>
					<div class="media"><img src="<?php bloginfo('template_url') ?>/assets/images/global/callon.png" alt="" /></div>
				</div>
				<div class="cta"><a href="#" class="button moderateviolet">SCHEDULE A Free Culture Call</a></div>
			</div>
		</div>
	</section>

	<section class="two-column over-the-globe">
		<div class="wrapper">
			<div class="left-col yellow-area">
				<div class="media">
					<img src="<?php bloginfo('template_url') ?>/assets/images/global/companies.jpg" alt="" />
				</div>
				<article class="content">
					<p>We help organizations create their own unique and sustainable work cultures to unleash happiness, human potential and business success.</p>
					<a href="#" class="button yellow">Learn more</a>
				</article>
			</div>
			<div class="right-col offwhite-area">
				<div class="content">
					<h2>We’ve inspired businesses<br/>all over the globe.</h2>
					<img src="<?php bloginfo('template_url') ?>/assets/images/global/global.png" alt="" />
				</div>
			</div>
		</div>
	</section>

	<section class="three-column oderate-violet get-involved cross-fade">
		<div class="wrapper">
			<h2>Work with us:</h2>
			<div class="col left-col">
				<div class="poster-1">
					<div class="media"><img src="<?php bloginfo('template_url') ?>/assets/images/global/wwus_graphic_2.jpg" alt="" /></div>
					<div class="content small">
						<div class="v-aling">
							<span class="date">March 4, 2014</span>
							<span class="location">Seaside</span>
						</div>
					</div>
				</div>
				<div class="hover-content">
					<div class="v-aling">
						<p><span>Delivering Happiness at the Oregon Festivals and Events Association</span>DHW keynote on happiness, profits, passion and purpose</p>
						<a href="#" class="button moderateviolet">learn more</a>
					</div>
				</div>
			</div>
			<div class="col middle-col">
				<div class="poster-2">
					<div class="media"><img src="<?php bloginfo('template_url') ?>/assets/images/global/wwus_graphic_1.jpg" alt="" /></div>
					<div class="content small">
						<div class="v-aling">
							<span class="date">May 2014</span>
							<span class="location">Ecuador</span>
						</div>
					</div>
				</div>
				<div class="hover-content">
					<div class="v-aling">
						<p><span>Delivering Happiness at Work at the Arco Estrategias Leadership Event</span>The scientific base and case studies on how happiness builds a company from values, to culture to profits.</p>
						<a href="#" class="button moderateviolet">learn more</a>
					</div>
				</div>
			</div>
			<div class="col right-col">
				<div class="become-partner">
					<div class="content">
						<div class="v-aling"><h3>Become<br/>a<br/>partner</h3></div>
					</div>
				</div>
				<div class="hover-content">
					<div class="v-aling">
						<a href="#" class="button moderateviolet">Become partner</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="two-column inspiration">
		<div class="wrapper">
			<div class="left-col">
				<div class="media">
					<img src="<?php bloginfo('template_url') ?>/assets/images/global/become-a-partner.jpg" alt="" />
				</div>
			</div>
			<div class="right-col strongyellow-area">
				<div class="content">
					<h3>Partner with us.<span>Interested in being a DH partner?<br/>you’re in the right place. </span></h3>
					<p>We’re on a mission to share the science of happiness<br/>and impact workplace cultures around the world. To do<br/>that, we’ve created a partner program.  Whether you’re<br/>a company or a self-employed coach, let us know what<br/>your vision is in changing the world. </p>
					<a href="#" class="button softyellow">APPLY TO BE A PARTNER</a>
				</div>
			</div>
		</div>
	</section>


	<!-- Calculation graph section-->
	<section class="rounded-block calculation">
		<div class="wrapper">
			<div class="container">
				<div class="floated-holder">
					<div class="left-col">
						<article class="content">
							<h2><span>How much could happiness save you?</span>Companies with a<br/>higher sense of purpose<br/>outperformed those<br/>without by 400%.</h2>
						</article>
					</div>
					<div class="right-col">
						<img src="<?php bloginfo('template_url') ?>/assets/images/global/chart.png" alt="placeholder" />
					</div>
				</div>
				<a href="#" class="button blue">Calculate your happiness ROI</a>
			</div>
			
		</div>
	</section>
	<!-- /Calculation graph section-->
</div>
<!-- /Work page-->

<?php get_footer(); ?>