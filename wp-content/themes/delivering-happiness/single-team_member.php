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
			<h1>Blog > <?php the_title() ?></h1>
			<div class="all-categories">
				<?php $all_categories = get_categories();
				foreach ( $all_categories as $category ) {
					echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a>';
				} ?>
			</div>
		</div>
		<div id="primary" class="content-area left-col">
			<main id="main" class="site-main" role="main">
				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php the_title(); ?>

						<?php the_field( 'designation' ); ?>

						<?php the_content(); ?>

						<img src="<?php $image = get_field( 'image' ); echo $image['url']; ?>" alt="<?php the_title(); ?>" />

						<?php the_field( 'facebook' ); ?>

						<?php the_field( 'twitter' ); ?>

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

<?php get_footer();