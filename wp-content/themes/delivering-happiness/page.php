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

<?php get_footer(); ?>
