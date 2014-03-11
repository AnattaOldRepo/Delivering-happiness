<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Delivering Happiness
 */
?>
	<div id="secondary" class="sidebar right-col" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>

			<aside class="become-a-vhp">
				<h3>Become a VHP<span>(Very Happy Person)</a></h3>
				<p>Get happiness delivered to your inbox. No third party sharing, we promise.</p>
				<input type="text" placeholder="your email address" />
				<input type="submit" value="sign up" class="button" />
			</aside>
			<aside class="wfu">
				<h3>Write for us</h3>
			</aside>
			<aside class="fp">
				<hr/>
				<h3>OUR FAVORITE POSTS</h3>
				<a href="#">Wisdom for a Happy Life: Lessons from Sports</a>
				<a href="#">Improve Your Chances for Success by Improving Your Mindset.</a>
				<a href="#">We. Sell. Joy. Why Don’t You?</a>
			</aside>
			<aside class="twitter widget">
				<a href="https://twitter.com/dhmovement" class="twitter-follow-button" data-show-count="true" data-lang="en">Follow @dhmovement</a>
    			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</aside>
			<aside class="fb">
				<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Ffacebook.com%2Fdeliveringhappiness&amp;width=256&amp;height=590&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=true&amp;appId=197656220297874" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:256px; height:590px;" allowTransparency="true"></iframe>
			</aside>

	</div><!-- #secondary -->
