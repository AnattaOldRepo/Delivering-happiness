<?php
/*
Template Name:	community
*/
get_header();

?>

<!-- Work page-->
<div class="community">

	<section class="two-column hero video-container">
		<div class="onload-container">
			<div class="wrapper">
				<div class="left-col orange-area">
					<article class="content">
						<blockquote>Delivering Happiness.</blockquote>
						<span>A global  movement,<br/>fueled by you.</span>
						<a href="#" class="button arrow">See How it Begins</a>
					</article>
				</div>
				<div class="right-col">
					<div class="media">
						<img src="<?php bloginfo('template_url')?>/assets/images/global/community-hero.jpg" alt="" />
					</div>
				</div>
			</div>
			<div class="video">
				<iframe width="1170" height="546" src="///www.youtube.com/embed/nfdvNo8R3Ks?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</section>

	<section class="happier-world rounded-block">
		<div class="wrapper">
			<div class="container">
				<div class="left-col">
					<article class="content">
						<h2>The Change Starts Here.<span>At work, in our communities, and in our every-<br/>day lives.</span></h2>
						<p>Backed by science, business sense, and common sense, we know<br/>that living a purposeful life is what really matters. So come along<br/>and join the movement. As our CEO says, it all begins with you.</p>
						<p>It can be as simple as passing out balloons to strangers, or breaking<br/>out your best dance moves at the next company party. Or, make a<br/>bigger impact by hosting an Inspire! event in your company or<br/>community. How will you pay happiness forward? How will you<br/>change the world?</p>
						<a href="/community/change-starts-here/" class="button orange">Tell me more</a>
					</article>
				</div>
				<div class="right-col">
					<img src="<?php bloginfo('template_url') ?>/assets/images/global/globe.jpg" alt="placeholder" />
				</div>
			</div>
		</div>
	</section>

	<section class="two-column coin-animation clients flip">
		<div class="wrapper">
			<div class="left-col">
				<div class="media">
					<h2>Very Happy People:</h2>
					<div class="all-coins">
						<div class="coin active">
							<div class="coin-side front happy-people-hp-1"></div>
							<div class="coin-side back happy-people-hp-1-selected"></div>
						</div>
						<div class="coin">
							<div class="coin-side front happy-people-hp-6"></div>
							<div class="coin-side back happy-people-hp-6-selected"></div>
						</div>
						<div class="coin last">
							<div class="coin-side front happy-people-hp-4 "></div>
							<div class="coin-side back happy-people-hp-4-selected"></div>
						</div>
						<div class="coin">
							<div class="coin-side front happy-people-hp-5"></div>
							<div class="coin-side back happy-people-hp-5-selected"></div>
						</div>
						<div class="coin">
							<div class="coin-side front happy-people-hp-3"></div>
							<div class="coin-side back happy-people-hp-3-selected"></div>
						</div>
						<div class="coin last">
							<div class="coin-side front happy-people-hp-2"></div>
							<div class="coin-side back happy-people-hp-2-selected"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="right-col blue-area">
				<article class="content active">
					<div class="v-aling">
						<blockquote>After reading "Delivering Happiness" at the end of last year it has made a change with how I approach my relationship with customers. I also believe it's the beginning of a journey in discovering a higher purpose in life. I have made it my mission to continue to bring happiness to every educator I get a chance to talk to. In turn, hopefully they can bring happiness to their customers who are the children of the world. </blockquote>
						<span>Alan Lin (San Francisco, California)</span>
					</div>
				</article>
				<article class="content">
					<div class="v-aling">
						<blockquote>First off, wow. I am still riding on a natural high from your keynote.  It truly was motivating, inspiring and humbling. The way you approach happiness in life is spectacular. I took so many notes to keep reminding myself all the unique ways to keep it in perspective. Thank you again for sharing your wisdom, stories and quest for being bigger than ourselves through fun and a little weirdness.</blockquote>
						<span>Mackenzie Nurse (Wakefield, Massachusetts)</span>
					</div>
				</article>
				<article class="content">
					<div class="v-aling">
						<blockquote>Thank you for sharing your message of inspiration today at Toyota. I am a corporate trainer at the University of Toyota and positive psychology is a passion of mine. I have read Tony’s book and am now reading Shawn Achor’s book, this movement is so exciting! I enjoyed every moment of [Jenn’s] presentation and thank you for taking the time to be here to share it with us.</blockquote>
						<span>Karin Accomando (Torrance, California)</span>
					</div>
				</article>
				<article class="content">
					<div class="v-aling">
						<blockquote>I came across your website and especially your tools regarding happiness@work and your community and I am truly impressed. Being a consultant in Australia, I can see how CEO's are starting to recognize the benefits of investing and keeping their people happy. Keep inspiring the world. </blockquote>
						<span> Marite Metsla (Melbourne, Australia)</span>
					</div>
				</article>
				<article class="content">
					<div class="v-aling">
						<blockquote>It’s nice to know there is a revolution starting in businesses thanks to your work and the work of other thought leaders. I read the full report that Gallup came out last year about productivity and culture—I think it’s the most important work a company can do, and find it incredibly validating to see books and companies like yours out there helping to tell the story in a way where business leaders will listen! </blockquote>
						<span>Char-Lynn Griffiths (Atlanta, Georgia)</span>
					</div>
				</article>
				<article class="content">
					<div class="v-aling">
						<blockquote>I just listened to the EntreLeadership podcast with Jenn and was so inspired to hear what she had to say. At my new company, we have been so intentional about the integrity and culture surrounding our health food products that it only makes sense to build a strong culture as we grow our business. Your work inspired us to become a Certified B Corp. and partner with 1% for the Planet. Thank you for leading the change you wish to see.</blockquote>
						<span>Catherine Mangan Walsh (New York, New York) </span>
					</div>
				</article>
			</div>
		</div>
	</section>

	<section class="instagram">
		<div class="wrapper">
			<h2>Share a smile at #DHsmile</h2>
			<?php $instagram_pics = AnattaDesign_Storify::getInstagram( get_field( 'instagram_storify_json_url', 'option' ) ); ?>
			<?php foreach ( $instagram_pics as $instagram_pic ) { ?>
				<img src="<?php echo $instagram_pic['src']; ?>" alt="instagram pic" />
				<?php // available data =>a $instagram_pic['image'] $instagram_pic['name'] $instagram_pic['username'] $instagram_pic['link'] $instagram_pic['type'] $instagram_pic['src'] $instagram_pic['text'] $instagram_pic['time'] ?>
			<?php } ?>
		</div>
	</section>

	<section class="two-column coin-animation movements flip">
		<div class="wrapper">
			<div class="left-col">
				<div class="content">
					<h2>Join the movement:</h2>
					<div class="all-coins">
						<div class="coin active">
							<div class="coin-side front movements-chat"></div>
							<div class="coin-side back movements-chat-selected"></div>
						</div>
						<div class="coin">
							<div class="coin-side front movements-inspire"></div>
							<div class="coin-side back movements-inspire-selected"></div>
						</div>
						<div class="coin">
							<div class="coin-side front movements-write"></div>
							<div class="coin-side back movements-write-selected"></div>
						</div>
						<div class="coin">
							<div class="coin-side front movements-cal"></div>
							<div class="coin-side back movements-cal-selected"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="right-col">
				<article class="content chat active">
					<h3>Happiness 101</h3>
					<p>Loved the book? Come love the blog! Discover a wealth of resources to continue your happiness education.</p>
					<a href="/happiness-101/" class="button">Read and Enjoy</a>
				</article>
				<article class="content inspire">
					<h3>Inspire! and Be Inspired</h3>
					<p>Take the stage to share your inspiration at Inspire!, a story-worthy event series featuring speakers from your local community.</p>
					<a href="#" class="button">Find an Event</a>
				</article>
				<article class="content write">
					<h3>Share Your Story</h3>
					<p>What's your story? Share how you're spreading happiness at home, at work or in your community. We'll not only hook you up with a whopping 20% off shop coupon for it, we may also publish it for others who might be inspired to take your lead.</p>
					<a href="#" class="button">Share Your Story</a>
				</article>
				<article class="content cal">
					<h3>Be a Happiness Ambassador</h3>
					<p>Join our community of movers and shakers collaborating, encouraging and sharing how they're growing happiness in their lives and communities. </p>
					<a href="#" class="button">Become a VHP</a>
				</article>
			</div>
		</div>
	</section>
	
	<section class="products-animation" style="margin-bottom:50px;">
		<div class="wrapper">
			<h2>Our Facebook is full of inspiration:</h2>
			<div class="card active"><a href="https://www.facebook.com/deliveringhappiness/photos/a.478453395550.385890.460305775550/10152598661165551/?type=1" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/global/card1.png" alt="" /></a></div>
			<div class="card"><a href="https://www.facebook.com/deliveringhappiness/photos/a.478453395550.385890.460305775550/10152566977070551/?type=1" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/global/card2.png" alt="" /></a></div>
			<div class="card"><a href="https://www.facebook.com/deliveringhappiness/photos/a.478453395550.385890.460305775550/10152625431485551/?type=1" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/global/card3.jpg" alt="" /></a></div>
			<div class="card"><a href="https://www.facebook.com/deliveringhappiness/photos/a.478453395550.385890.460305775550/10152575803860551/?type=1" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/global/card4.png" alt="" /></a></div>
			<div class="card"><a href="https://www.facebook.com/deliveringhappiness/photos/a.478453395550.385890.460305775550/10152661387470551/?type=1" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/global/card6.png" alt="" /></a></div>
			<div class="card"><a href="https://www.facebook.com/deliveringhappiness/photos/a.478453395550.385890.460305775550/10152704828360551/?type=1" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/global/card7.jpg" alt="" /></a></div>
			<div class="card"><a href="https://www.facebook.com/deliveringhappiness/photos/a.478453395550.385890.460305775550/10152683686200551/?type=1" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/global/card8.jpg" alt="" /></a></div>
			<div class="card"><a href="https://www.facebook.com/deliveringhappiness/photos/a.478453395550.385890.460305775550/10152667196285551/?type=1" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/global/card5.png" alt="" /></a></div>
			<div class="card"><a href="https://www.facebook.com/deliveringhappiness/photos/a.478453395550.385890.460305775550/10152761020320551/?type=1" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/global/card9.png" alt="" /></a></div>
			<div class="card"><a href="https://www.facebook.com/photo.php?fbid=10153188754245551&set=a.478453395550.385890.460305775550&type=1" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/global/card10.jpg" alt="" /></a></div>
		</div>
	</section>

</div>
<!-- /Work page-->

<?php get_footer(); ?>