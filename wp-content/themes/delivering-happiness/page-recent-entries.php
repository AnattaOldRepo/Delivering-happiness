<?php
/*
Template Name: Recent Entries
*/
get_header(); ?>
<div class="happiness-page">
	<div class="wrapper">
		<div class="page-header">
			<div class="all-categories"><a href="<?php echo home_url(); ?>/recent-entries" class="active-cat">Recent Entries</a>
				<?php $all_categories = get_categories();
				foreach ( $all_categories as $category ) {
					echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a>';
				} ?>
			</div>
		</div>
		<div id="primary" class="content-area left-col">
			<main id="main" class="site-main" role="main">
			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array( 
		        'posts_per_page' => 5, 
		        'paged' => $paged, 
		        'post_type' => 'post'
		    );
		    $cpt_query = new WP_Query($args);
			?>
			<?php if ( $cpt_query->have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( $cpt_query->have_posts() ) : $cpt_query->the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

				<nav class="navigation paging-navigation" role="navigation">
					<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'delivering-happiness' ); ?></h1>
					<div class="nav-links">
						<div class="nav-previous"><?php next_posts_link( __( 'Next', 'delivering-happiness' ), $cpt_query->max_num_pages ); ?></div>
						<div class="nav-next"><?php previous_posts_link( __( 'Previous', 'delivering-happiness' ),$cpt_query->max_num_pages ); ?></div>
					</div><!-- .nav-links -->
				</nav><!-- .navigation -->
			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>
			<?php wp_reset_query(); ?>

			</main><!-- #main -->
		</div><!-- #primary -->
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>