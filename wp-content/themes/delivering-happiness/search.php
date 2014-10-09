<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Delivering Happiness
 */

get_header(); ?>
<div class="happiness-page">
	<div class="wrapper">
		<div class="page-header">
			<h1><?php printf( __( 'Search results for: %s', 'delivering-happiness' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</div>
		<div id="primary" class="content-area left-col">
			<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'search' ); ?>

				<?php endwhile; ?>

				<?php delivering_happiness_paging_nav(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>