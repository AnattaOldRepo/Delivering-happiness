<?php
/*
Template Name: Roi-Calculator
*/
get_header();

?>
<!-- Roi Calculator page-->
<div class="one-column-template">
	<div class="roi-calculator-page">
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
</div>
<!-- /Work page-->

<?php get_footer(); ?>