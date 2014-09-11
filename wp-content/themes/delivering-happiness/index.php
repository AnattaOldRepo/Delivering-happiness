<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Delivering Happiness
 */

get_header(); ?>
<div class="happiness-page">
	<div class="wrapper">
		<div class="page-header">
			<h1>Blog</h1>
			<div class="all-categories"><a href="<?php echo home_url(); ?>/recent-entries">Recent Entries</a>
				<?php $all_categories = get_categories();
				foreach ( $all_categories as $category ) {
					echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a>';
				} ?>
			</div>
		</div>
		<div id="primary" class="content-area left-col">
			<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

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
