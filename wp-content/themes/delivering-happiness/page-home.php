<?php
/*
Template Name: Home
*/
get_header();

?>

<!-- Hero section-->
<section class="hero_banner video-container">
	<div class="onload-container">
		<div class="wrapper">
			<h2 style="display:none;">We’re changing the<br/>world with happiness.<br/><span>Sound fluffy? Not anymore.<span></h2>
			<a style="display:none;" href="#" class="button arrow">GET ON BOARD</a>
			<a href="/services" class="cta"></a>
		<div class="clearfix"></div></div>
		<!--div class="video">
			<iframe width="1170" height="546" src="//www.youtube.com/embed/4teXtmYyzxA?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
		</div-->
	</div>

	<div class="clearfix"></div>
</section>
<!-- /Hero section-->

<!-- Happier world section-->
<section class="happier-world rounded-block">
	<div class="wrapper">
		<div class="container">
			<div class="right-col">
				<img src="<?php bloginfo('template_url') ?>/assets/images/global/placeholder-h-g.png" alt="placeholder" />
			</div>
			<div class="left-col">
				<article class="content">
					<h2>Creating a happier world.<span>One person, community and company at a time.</span></h2>
					<p>Science tells us that people are bad at predicting what keeps us happy. It also says that focusing on our passions and purpose can create sustainable happiness. Yet, here we are, a global society of people that are unhappy (or think they could be happier) in life.</p>
					<p>Simply put, everyone wants to be a part of something bigger than ourselves. To have a higher purpose. That’s where we come in. 
					We believe by prioritizing happiness in work and life, together we 
					can create change in the world more than we ever thought possible.</p>
					<a href="/community" class="button blue">Tell me more</a>
				</article>
			</div>
			
		</div>
	</div>
</section>
<!-- /Happier world section-->

<!-- Happiness section-->
<section class="two-column coin-animation happiness flip">
	<div class="wrapper">
		<div class="left-col">
			<div class="media">
				<h2>The effects of happiness:</h2>
				<div class="all-coins">
					<div class="coin active">
						<div class="coin-side front happiness-sandels"></div>
						<div class="coin-side back happiness-sandels-selected"></div>
					</div>
					<div class="coin">
						<div class="coin-side front happiness-heart"></div>
						<div class="coin-side back happiness-heart-selected"></div>
					</div>
					<div class="coin">
						<div class="coin-side front happiness-mountain"></div>
						<div class="coin-side back happiness-mountain-selected"></div>
					</div>
					<div class="coin left-pull">
						<div class="coin-side front happiness-lilly"></div>
						<div class="coin-side back happiness-lilly-selected"></div>
					</div>
					<div class="coin">
						<div class="coin-side front happiness-winky"></div>
						<div class="coin-side back happiness-winky-selected"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="right-col">
			<article class="content sandels active">
				<h3>Lowers Stress</h3>
				<img src="<?php bloginfo('template_url') ?>/assets/images/global/sandels-l.png" alt="" />
				<p>Working overtime? Got cut off on the freeway? Things happen out of our control all the time but what we CAN control is what makes us happy.<span>~ The Happiness Advantage, Shawn Achor</span></p>
			</article>
			<article class="content heart">
				<h3>Improves Health</h3>
				<img src="<?php bloginfo('template_url') ?>/assets/images/global/heart-l.png" alt="" />
				<p>Exercise helps, but did you know? Happy people have more energy and activity, a bolstered immune system, and even longevity.<span>~ Pursuing Happiness, Lyubomirsky, Sheldon and Schkade</span></p>
			</article>
			<article class="content mountain">
				<h3>Redefines Success</h3>
				<img src="<?php bloginfo('template_url') ?>/assets/images/global/mountain-l.png" alt="" />
				<p>It’s easy to see that success can lead to happiness, but studies also show the opposite. Happy individuals are more likely to be successful across multiple life domains than their less happy peers. </p>
			</article>
			<article class="content lilly">
				<h3>Brings Meaning</h3>
				<img src="<?php bloginfo('template_url') ?>/assets/images/global/lilly-l.png" alt="" />
				<p>Research shows that having a higher purpose — being a part of something bigger than yourself — will not only bring you the longest lasting happiness, but meaningful happiness to boot.<span>~ Authentic Happiness, Martin E. P. Seligman</span></p>
			</article>
			<article class="content winky">
				<h3>Changes Lives</h3>
				<img src="<?php bloginfo('template_url') ?>/assets/images/global/winkey-l.png" alt="" />
				<p>Deciding to be happier will change your life for the better. Working toward a happiness goal generates its own payoff as you tip the scales toward a happier life. And when you’re being true to your (weird) self, you’ll inspire others toward their own personal happiness. </p>
			</article>
		</div>
	</div>
</section>
<!-- /Happiness section-->

<!-- Calculation graph section-->
<section class="rounded-block calculation" style="display:none;">
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
			<a href="/services/calculate-your-roi" class="button blue">Calculate your happiness ROI</a>
		</div>
	</div>
</section>
<!-- /Calculation graph section-->


<!-- Get involved section-->
<section class="three-column blue get-involved cross-fade">
	<div class="wrapper">
		<h2>Take the first step:</h2>
		<div class="col left-col">
			<div class="work-survey">
				<div class="content">
					<div class="v-aling"><h3>Take the<br/>happiness at<br/>work survey</h3></div>
				</div>
			</div>
			<div class="hover-content">
				<div class="v-aling">
					<p>Are you happy at work? The results will show what you like and what needs to change.</p>
					<a href="<?php echo home_url(); ?>/services/the-happiness-at-work-survey/" class="button blue">Read On</a>
				</div>
			</div>
		</div>
		<div class="col middle-col">
			<div class="shop">
				<div class="media">
					<img src="<?php bloginfo('template_url') ?>/assets/images/global/shop-graphic.jpg" alt="" />
				</div>
				<div class="content small">
					<div class="v-aling"><h3>Live Happy</h3></div>
				</div>
			</div>
			<div class="hover-content">
				<div class="v-aling">
					<p>Inspire. Connect. Educate and Experience. Products that remind us of why happiness isn’t a fleeting thought, it’s a way to live.</p>
					<a href="/shop" class="button blue">Let's Live Happy!</a>
				</div>
			</div>
		</div>
		<div class="col right-col">
			<div class="schedule-call">
				<div class="content">
					<div class="v-aling"><h3> Join a <br/>culture call</h3></div>
				</div>
			</div>
			<div class="hover-content">
				<div class="v-aling">
					<p>Join the culture conversation, discuss challenges, and discover opportunities for your organization’s growth.</p>
					<a href="/services/culture-call/" class="button blue">Let's Talk Culture!</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Get involved section-->

<!-- Over the globe section-->
<section class="two-column over-the-globe">
	<div class="wrapper">
		<div class="left-col offwhite-area">
			<div class="content">
				<h2>We’ve inspired businesses<br/>all over the globe.</h2>
				<img src="<?php bloginfo('template_url') ?>/assets/images/global/global.png" alt="" />
			</div>
		</div>
		<div class="right-col yellow-area">
			<div class="media">
				<img src="<?php bloginfo('template_url') ?>/assets/images/global/companies.jpg" alt="" />
			</div>
			<article class="content">
				<p>We help organizations create their own unique and sustainable work cultures to unleash happiness, human potential and business success.</p>
				<a href="/services" class="button yellow">Learn more</a>
			</article>
		</div>
	</div>
</section>
<!-- /Over the globe section-->

<!-- Blog section-->
<section class="three-column blue blog cross-fade">
	<div class="wrapper">
		<h2>New on our blog:</h2>
		<?php
		$blog_posts = get_posts(
			array(
				'posts_per_page' => 3,
				'meta_query' => array(
					array(
						'key' => 'featured',
						'value' => '1',
						'compare' => '='
					)
				)
			)
		);
		?>
		<div class="col left-col">
			<div class="post-1">
				<div class="media">
					<?php if ( has_post_thumbnail( $blog_posts[0]->ID ) ) { ?>
						<?php echo get_the_post_thumbnail( $blog_posts[0]->ID ); ?>
					<?php } else if ( function_exists( 'get_the_image_by_scans' ) ) { ?>
						<?php $image = get_the_image_by_scans( array( 'post_id' => $blog_posts[0]->ID ) ); ?>
						<img src="<?php echo $image['src']; ?>" alt="featured-thumbnail" />
					<?php } ?>
				</div>
				<article class="content small">
					<div class="v-aling"><h3><?php echo get_the_title( $blog_posts[0]->ID ); ?></h3></div>
				</article>
				<div class="hover-content">
					<div class="v-aling">
						<?php if( has_excerpt( $blog_posts[0]->ID ) ) : ?>
							<p><?php echo $blog_posts[0]->post_excerpt; ?></p>
						<?php else : ?>
							<p><?php echo substr( strip_tags( $blog_posts[0]->post_content ), 0, 80 ); ?></p>
						<?php endif; ?>
						<a href="<?php echo get_permalink( $blog_posts[0]->ID ); ?>" class="button blue">LET’S GO!</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col middle-col">
			<div class="post-2">
				<div class="media">
					<?php if ( has_post_thumbnail( $blog_posts[1]->ID ) ) { ?>
						<?php echo get_the_post_thumbnail( $blog_posts[1]->ID ); ?>
					<?php } else if ( function_exists( 'get_the_image_by_scans' ) ) { ?>
						<?php $image = get_the_image_by_scans( array( 'post_id' => $blog_posts[1]->ID ) ); ?>
						<img src="<?php echo $image['src']; ?>" alt="featured-thumbnail" />
					<?php } ?>
				</div>
				<article class="content small">
					<div class="v-aling"><h3><?php echo get_the_title( $blog_posts[1]->ID ); ?></h3></div>
				</article>
				<div class="hover-content">
					<div class="v-aling">
						<?php if( has_excerpt( $blog_posts[1]->ID ) ) : ?>
							<p><?php echo $blog_posts[1]->post_excerpt; ?></p>
						<?php else : ?>
							<p><?php echo substr( strip_tags( $blog_posts[1]->post_content ), 0, 80 ); ?></p>
						<?php endif; ?>
						<a href="<?php echo get_permalink( $blog_posts[1]->ID ); ?>" class="button blue">LET’S GO!</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col right-col">
			<div class="post-3">
				<div class="media">
					<?php if ( has_post_thumbnail( $blog_posts[2]->ID ) ) { ?>
						<?php echo get_the_post_thumbnail( $blog_posts[2]->ID ); ?>
					<?php } else if ( function_exists( 'get_the_image_by_scans' ) ) { ?>
						<?php $image = get_the_image_by_scans( array( 'post_id' => $blog_posts[2]->ID ) ); ?>
						<img src="<?php echo $image['src']; ?>" alt="featured-thumbnail" />
					<?php } ?>
				</div>
				<article class="content small">
					<div class="v-aling"><h3><?php echo get_the_title( $blog_posts[2]->ID ); ?></h3></div>
				</article>
				<div class="hover-content">
					<div class="v-aling">
						<?php if( has_excerpt( $blog_posts[2]->ID ) ) : ?>
							<p><?php echo $blog_posts[2]->post_excerpt; ?></p>
						<?php else : ?>
							<p><?php echo substr( strip_tags( $blog_posts[2]->post_content ), 0, 80 ); ?></p>
						<?php endif; ?>
						<a href="<?php echo get_permalink( $blog_posts[2]->ID ); ?>" class="button blue">LET’S GO!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
