<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Delivering Happiness
 */

get_header(); ?>
<div class="happiness-page">
	<div class="wrapper">
		<div class="page-header">
			<div class="all-categories">
				<?php $all_categories = get_categories();
				foreach ( $all_categories as $category ) {
					echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a>';
				} ?>
			</div>
			<?php 
			$cat = get_the_category();
			$category = reset($cat); ?>
		</div>
		<div id="primary" class="content-area left-col">
			<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

		
			<div class="post">
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>
			</div>

			<?php delivering_happiness_post_nav(); ?>
		<?php endwhile; // end of the loop. ?>


			</main><!-- #main -->
		</div><!-- #primary -->
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>