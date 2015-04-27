<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Delivering Happiness
 */

get_header(); ?>
<?php if( is_page('calculate-your-roi') ) { ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
	$(function() {
		$(document).ready(function () {
	      	$('#calculate_roi_form').show();
		});
	});
</script>
<?php } ?>

<div class="one-column-template">
	<div class="wrapper">
		<div class="page-header">
			<h1><?php the_title() ?></h1>
		</div>
		<div id="primary" class="page-content">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					//if ( comments_open() || '0' != get_comments_number() ) :
					//	comments_template();
					//endif;
				?>

			<?php endwhile; // end of the loop. ?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
<div class="modal-box" id="calculate_roi_form" style="display:none;">
	<p>Please enter your information below to find out how much happiness could save you!</p>
	<iframe src="http://go.deliveringhappiness.com/l/66522/2015-03-31/cgg1" width="100%" height="300" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
	<p>We value your privacy. Read our <a href="/privacy/">Privacy Policy</a>.</p>
	<span class="close" id="close1">close</span>
</div>
<?php get_footer(); ?>